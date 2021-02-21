<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    // public function getDataEdit($id)
    // {
    //     $query = $this->db->get_where('user', array('id' => $id));

    //     return $query->result_array();
    // }

    // public function editDinas($post)
    // {

    //     $data = [
    //         'name' => $post['nama_dinas'],
    //         'nim' => $post['alamat'],
    //         'class' => $post['telp'],
    //         'nama_repl' => $post['username'],
    //         'role_id' => $post['email']

    //     ];

    //     return $this->db->update('user', $data, array('id' => $post['id']));
    // }
    private $table = "user";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
    function Jum_date_created()
    {
        $this->db->group_by('dat_created');
        $this->db->select('date_created');
        $this->db->select("count(*) as total");
        return $this->db->from('user')
            ->get()
            ->result();
    }
}
