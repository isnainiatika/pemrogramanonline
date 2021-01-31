<?php
class Asprak_model extends CI_Model
{

    //ambil data mahasiswa dari database
    public function getAllPengumpulan()
    {
        return $this->db->get('tb_pengumpulan')->result_array();
    }
}
