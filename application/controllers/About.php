<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('music_m');
        $this->load->model('video_m');
        $this->load->model('auths_m');
    }

    public function index()
    {
        $data['cmusic'] = $this->music_m->get('musics')->num_rows();
        $data['cvideo'] = $this->video_m->get('videos')->num_rows();
        $data['cmember'] = $this->auths_m->get('users')->num_rows();

        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/about/index', $data);
        $this->load->view('frontend/layout/footer');
        $this->load->view('frontend/layout/close');
    }
}
