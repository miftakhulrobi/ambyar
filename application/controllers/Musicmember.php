<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Musicmember extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_member();
        $this->load->model('member_m');
        $this->load->model('music_m');
    }
    public function index()
    {
        $this->load->view('member/layout/header');
        $this->load->view('member/music/index');
        $this->load->view('member/layout/footer');
        $this->load->view('member/music/script');
        $this->load->view('member/layout/close');
    }

    public function getmusic()
    {
        $music = $this->member_m->getmusic('musics', $this->session->userdata('user_id'))->result();
        echo json_encode($music);
    }

    public function store()
    {
        if ($_FILES['audio']['name']) {
            $config['allowed_types'] = 'mp3';
            $config['max_size']     = '10048';
            $config['upload_path'] = './admin/assets/files/music/';
            $config['remove_space'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('audio')) {
                $audio = $this->upload->data('file_name');
            }

            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'audio' => $audio,
            ];
            $result = $this->music_m->store('musics', $data);
            echo json_decode($result);
        }
    }

    public function destroy($id)
    {
        $music = $this->music_m->get_id('musics', $id)->row();
        $audio = './admin/assets/files/music/' . $music->audio;

        if (is_readable($audio) && unlink($audio)) {
            $this->music_m->destroy('musics', $id);
        }
        echo json_encode('Sukses');
    }
}
