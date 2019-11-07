<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notification extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('notification_m');
    }
    public function index()
    {
        $data['notif'] = $this->notification_m->get_all('notifications')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/notification/index', $data);
        $this->load->view('admin/layout/footer');
        $this->load->view('admin/notification/script');
        $this->load->view('admin/layout/close');
    }

    public function show($id)
    {
        $notif = $this->notification_m->get_id('notifications', $id)->row();

        $open = [
            'open' => 1
        ];
        $this->notification_m->open('notifications', $open, $notif->notif_id);

        echo json_encode($notif);
    }
}
