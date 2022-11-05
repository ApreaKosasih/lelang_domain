<?php defined('BASEPATH') or exit('No direct script access allowed');

class Order_model extends CI_Model
{
    private $_table = "order";

    public $id_order;
    public $email;
    public $harga_diajukan;
    public $nama_lengkap;
    public $no_tlpn;

    public function rules()
    {
        return [
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],

            [
                'field' => 'harga_diajukan',
                'label' => 'Harga',
                'rules' => 'numeric'
            ],

            [
                'field' => 'no_tlpn',
                'label' => 'Nomor Telepon',
                'rules' => 'required'
            ]
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_order = uniqid();
        $this->email = $post["email"];
        $this->harga_diajukan = $post["harga_diajukan"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->no_tlpn = $post["no_tlpn"];
        $this->domain = $post["domain"];
        return $this->db->insert($this->_table, $this);
    }
}
