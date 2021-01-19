<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ViewPengumpulan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'View Laporan';
        $id = $this->uri->segment(2);

        $data['pdf'] = $this->db->get_where('tb_pengumpulan', ['id' => $id])->result();

        $this->load->view('viewpengumpulan', $data);
    }
}
