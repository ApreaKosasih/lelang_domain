<?php defined('BASEPATH') or exit('No direct script access allowed');

class Domain_model extends CI_Model
{
    private $_table = "list_domain";
    public $id_list_domain;
    public $domain;
    public $expeired_date;
    public $harga_terakhir;
    public $harga_beli;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_list_domain" => $id])->row();
    }
}
