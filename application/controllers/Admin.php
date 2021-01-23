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
            $this->session->set_flashdata('ok_del_dinas', 'HAPUS Data User Dinas / Institusi SUKSESS...');
            redirect('admin/mahasiswa');
        } else {
            $this->session->set_flashdata('err_del_dinas', 'HAPUS Data User Dinas / Institusi GAGAL...');
            redirect('admin/mahasiswa');
        }
    }
}
