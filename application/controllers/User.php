<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $nim = $this->input->post('nim');
            $class = $this->input->post('class');
            $nama_repl = $this->input->post('nama_repl');
            $email = $this->input->post('email');

            //cek jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpeg|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('nim', $nim);
            $this->db->set('class', $class);
            $this->db->set('nama_repl', $nama_repl);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profile has been updated</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                redirect('user/changepassword');
            } else {

                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same current password!</div>');
                    redirect('user/changepassword');
                } else {
                    //password benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Change Password Successed</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
    public function praktikum()
    {
        $data['title'] = 'Praktikum Alpro';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_berkas');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/praktikum', $data);
        $this->load->view('templates/footer');
    }
    public function pengumpulan()
    {
        $data['title'] = 'Praktikum Alpro';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kumpul'] = $this->db->get_where('tb_pengumpulan', ['email' => $this->session->userdata('email')]);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('halpengumpulan', $data);
        $this->load->view('templates/footer');
    }
    function proses()
    {
        $config['upload_path']          = './berkas/';
        $config['allowed_types']        = 'pdf';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // $config['encrypt_name']			= TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('kumpul')) {
            $error = array('error' => $this->upload->display_errors());
            var_dump($config);
            $this->load->view('user/praktikum', $error);
        } else {
            $data['nama'] = $this->input->post('nama');
            $data['email'] = $this->input->post('email');
            $data['kelas'] = $this->input->post('kelas');
            $data['modul'] = $this->input->post('modul');
            $data['nama_asprak'] = $this->input->post('nama_asprak');
            $data['ukuran'] = $this->upload->data('file_size');
            $data['nama_berkas'] = $this->upload->data("file_name");
            $this->db->insert('tb_pengumpulan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Laporan telah dikumpulkan !</div>');

            redirect('user/pengumpulan');
        }

        $data['kumpul'] = $this->db->get('tb_pengumpulan');
        $this->load->view('halpengumpulan', $data);

        $data['title'] = 'Praktikum Pemrograman Online';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/praktikum', $data);
        $this->load->view('templates/footer');
    }
    public function hapus_lap($id)
    {
        $query = $this->db->delete('tb_pengumpulan', array('id' => $id));

        if ($query > 0) {
            $this->session->set_flashdata('ok_del', 'HAPUS Data SUKSESS...');
            redirect('user/pengumpulan');
        } else {
            $this->session->set_flashdata('err_del', 'HAPUS Data GAGAL...');
            redirect('user/pengumpulan');
        }
    }
}
