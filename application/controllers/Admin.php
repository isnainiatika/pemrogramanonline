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
    public function modul()
    {
        $data['title'] = 'Daftar Modul';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_berkas');



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/modul', $data);
        $this->load->view('templates/footer');
    }
    function create()
    {
        $this->load->view('form_upload');
    }

    function proses()
    {
        $config['upload_path']          = './modul/';
        $config['allowed_types']        = 'pdf';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // $config['encrypt_name']			= TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/modul', $error);
        } else {
            $data['nama_berkas'] = $this->upload->data("file_name");
            $data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
            $data['tipe_berkas'] = $this->upload->data('file_ext');
            $data['ukuran_berkas'] = $this->upload->data('file_size');
            $this->db->insert('tb_berkas', $data);
            redirect('admin/modul');
        }
    }
    public function pengumpulan()
    {
        $data['title'] = 'Daftar Pengumpulan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kumpul'] = $this->db->get('tb_pengumpulan');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pengumpulan', $data);
        $this->load->view('templates/footer');
    }
}
