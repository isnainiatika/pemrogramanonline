<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Praktikum extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Praktikum';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->uri->segment(2);

		$data['pdf'] = $this->db->get_where('tb_berkas', ['kd_berkas' => $id])->result();
		$data['asprak'] = $this->db->get_where('user', ['role_id' => 3])->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pertemuan', $data);
		$this->load->view('templates/footer');


		// $this->load->view('pertemuan', $data);
	}
}
