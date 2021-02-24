<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asprak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function modul()
	{
		$data['title'] = 'Modul';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['berkas'] = $this->db->get('tb_berkas');



		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('asprak/modul', $data);
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
			$this->load->view('asprak/modul', $error);
		} else {
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$data['tipe_berkas'] = $this->upload->data('file_ext');
			$data['ukuran_berkas'] = $this->upload->data('file_size');
			$data['nama_asprak'] = $this->input->post('nama');
			$this->db->insert('tb_berkas', $data);
			redirect('asprak/modul');
		}
	}
	public function pengumpulan()
	{
		$data['title'] = 'Pengumpulan Laporan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['kumpul'] = $this->db->get_where('tb_pengumpulan', ['nama_asprak' => $this->session->userdata('name')]);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('asprak/pengumpulan', $data);
		$this->load->view('templates/footer');
	}

<<<<<<< HEAD
        $data['kumpul'] = $this->db->get_where('tb_pengumpulan', ['nama_asprak' => $this->session->userdata('name')]);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('asprak/pengumpulan', $data);
        $this->load->view('templates/footer');
    }
=======
	public function viewlaporan()
	{
		$data['title'] = 'View Laporan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
>>>>>>> 6cc64c4fda54c2c2ccfc4dfc2036e35d49304371

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('asprak/viewpengumpulan', $data);
		$this->load->view('templates/footer');
	}
	public function hapus_modul($kd_berkas)
	{
		$query = $this->db->delete('tb_berkas', array('kd_berkas' => $kd_berkas));

		if ($query > 0) {
			$this->session->set_flashdata('ok_del', 'HAPUS Data SUKSESS...');
			redirect('asprak/modul');
		} else {
			$this->session->set_flashdata('err_del', 'HAPUS Data GAGAL...');
			redirect('asprak/modul');
		}
	}
}
