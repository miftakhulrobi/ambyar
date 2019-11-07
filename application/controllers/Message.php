<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('contact_m');
    }
    public function index()
    {
        $data['message'] = $this->contact_m->get('contacts')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/message/index', $data);
        $this->load->view('admin/layout/footer');
        $this->load->view('admin/message/script');
        $this->load->view('admin/layout/close');
    }

    public function show($id)
    {
        $data = [
            'open' => 1
        ];
        $this->contact_m->update('contacts', $data, $id);

        $result = $this->contact_m->get_id('contacts', $id)->row();
        echo json_encode($result);
    }

    public function destroyall()
    {
        $data = $this->contact_m->get('contacts')->num_rows();
        if ($data) {
            $this->contact_m->destroyall('contacts');

            $this->session->set_flashdata('success', 'Berhasil menghapus data!');
            redirect('message');
        } else {
            $this->session->set_flashdata('error', 'Tidak ada data yang di hapus!');
            redirect('message');
        }
    }
}
