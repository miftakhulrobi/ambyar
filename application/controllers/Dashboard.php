<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('music_m');
        $this->load->model('video_m');
        $this->load->model('auths_m');
        $this->load->model('blogs_m');
    }

    public function index()
    {
        $data['cmusic'] = $this->music_m->get('musics')->num_rows();
        $data['cvideo'] = $this->video_m->get('videos')->num_rows();
        $data['cmember'] = $this->auths_m->get('users')->num_rows();
        $data['cblog'] = $this->blogs_m->get('blogs')->num_rows();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/layout/footer');
        $this->load->view('admin/layout/close');
    }
}
