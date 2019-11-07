<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notificationmember extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_member();
        $this->load->model('notification_m');
    }
    public function index()
    {
        $data['notif'] = $this->notification_m->get_allmember('notifications', $this->session->userdata('user_id'))->result();

        $this->load->view('member/layout/header');
        $this->load->view('member/notification/index', $data);
        $this->load->view('member/layout/footer');
        $this->load->view('member/notification/script');
        $this->load->view('member/layout/close');
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

    public function open($id)
    {
        $data = [
            'open' => 1
        ];
        $result = $this->notification_m->open('notifications', $data, $id);
        echo json_encode($result);
    }
}
