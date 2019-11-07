<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_m');
    }

    public function index()
    {
        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/contact/index');
        $this->load->view('frontend/layout/footer');
        $this->load->view('frontend/contact/script');
        $this->load->view('frontend/layout/close');
    }

    public function store()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'message' => $this->input->post('message'),
        ];
        $result = $this->contact_m->store('contacts', $data);
        echo json_encode($result);
    }
}
