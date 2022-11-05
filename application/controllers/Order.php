<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("order_model");
        $this->load->model("domain_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $this->load->view('landing');

        $data["list_domain"] = $this->domain_model->getAll();
        $this->load->view("landing", $data);
    }

    public function orderdomain($domain)
    {
        $data['domain'] = $domain;
        $this->load->view('order_domain', $data);
    }

    public function add()
    {
        $order = $this->order_model;
        $validation = $this->form_validation;
        $validation->set_rules($order->rules());

        if ($validation->run()) {
            $order->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('/');
    }
}
