<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload_Model extends CI_Model
{
    public function all()
    {
        $this->db->select('*');
        $this->db->from('upload');
        $this->db->order_by('tanggal_upload', 'DESC');

        return $this->db->get();
    }

    public function insert($data)
    {
        $this->db->insert('upload', $data);

        return ($this->db->affected_rows() > 0) ? true : false;
    }
}
