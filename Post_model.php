<?php defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
    private $table = "tb_nama";

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
        return $this->db->get_where($this->table, ["id_nama" => $id])->row();
    }

    public function update($data, $id){
        return $this->db->update($this->table, $data, array('id_nama' => $id));
    }
    
    public function delete($id){
        return $this->db->delete($this->table, array("id_nama" => $id));
    }

}
