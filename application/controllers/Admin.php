<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['orang'] = $this->db->get('user');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function mahasiswa()
    {
        $data['title'] = 'Kelola Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['orang'] = $this->db->get('user');
        $this->db->order_by('date_created', 'DESC');


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/mahasiswa', $data);
        $this->load->view('templates/footer');
    }
    public function hapus_user($id)
    {
        $query = $this->db->delete('user', array('id' => $id));

        if ($query > 0) {
            $this->session->set_flashdata('ok_del', 'HAPUS Data User SUKSESS...');
            redirect('admin/mahasiswa');
        } else {
            $this->session->set_flashdata('err_del', 'HAPUS Data User GAGAL...');
            redirect('admin/mahasiswa');
        }
    }
    function edit($id)
    {

        $data['title'] = 'Kelola Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('admin_model', 'admin');
        $data['orang'] = $this->admin->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data['title'] = 'Kelola Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('class', 'Kelas', 'required');
        $this->form_validation->set_rules('nama_repl', 'Nama Repl', 'required');
        $this->form_validation->set_rules('role_id', 'Role Id', 'required');

        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $query['name'] = $this->input->post('name');
            $query['nim'] = $this->input->post('nim');
            $query['class'] = $this->input->post('class');
            $query['nama_repl'] = $this->input->post('nama_repl');
            $query['role_id'] = $this->input->post('role_id');

            $this->load->model('admin_model', 'admin');

            $query['orang'] = $this->admin->update($query, $id);
            // $query['subMenu'] = $this->menu->getSubMenu();
            // $this->admin_model->update($query, $id);
            redirect('admin/mahasiswa');
        } else {
            $id = $this->input->post('id');
            $this->load->model('admin_model', 'admin');
            $query['orang'] = $this->admin->getById($id);

            $this->load->view('templates/header', $query);
            $this->load->view('templates/sidebar', $query);
            $this->load->view('templates/topbar', $query);
            // $query['subMenu'] = $this->menu->getSubMenu();
            // $this->load->view('templates/header');
            $this->load->view('admin/edit', $query);
            $this->load->view('templates/footer');
        }
    }
    // public function graph()
    // {
    // 	$data['graph'] = $this->penduduk->graph();
    // 	$this->load->view('chart', $data);
    // }

}
