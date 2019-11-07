<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('music_m');
        $this->load->model('video_m');
        $this->load->model('auths_m');
        $this->load->model('beranda_m');
    }

    public function index()
    {
        $data['cmusic'] = $this->music_m->get('musics')->num_rows();
        $data['cvideo'] = $this->video_m->get('videos')->num_rows();
        $data['cmember'] = $this->auths_m->get('users')->num_rows();

        $data['music'] = $this->beranda_m->getmusic('musics')->result();
        $data['video'] = $this->beranda_m->getvideo('videos')->result();
        $data['blog'] = $this->beranda_m->getblog('blogs', 3)->result();

        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/beranda', $data);
        $this->load->view('frontend/layout/footer');
        $this->load->view('frontend/layout/close');
    }

    public function likethispage()
    {
        $app = $this->auths_m->app('apps', 1)->row();
        $v = $app->visitor + $this->input->post('visitor');
        $data = [
            'visitor' => $v
        ];
        $result = $this->auths_m->updateapp('apps', $data, 1);
        echo json_encode($result);
    }
}
