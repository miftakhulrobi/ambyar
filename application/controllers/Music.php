<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Music extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('music_m');
    }
    public function index()
    {
        $data['music'] = $this->music_m->get_all('musics')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/music/index', $data);
        $this->load->view('admin/layout/footer');
        $this->load->view('admin/music/script');
        $this->load->view('admin/layout/close');
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
            $this->music_m->store('musics', $data);

            $this->session->set_flashdata('success', 'Berhasil mengupload audio!');
            redirect('music');
        }
    }

    public function destroy($id)
    {
        $music = $this->music_m->get_id('musics', $id)->row();
        $audio = './admin/assets/files/music/' . $music->audio;

        if (is_readable($audio) && unlink($audio)) {
            $this->music_m->destroy('musics', $id);

            $this->session->set_flashdata('success', 'Data berhasil di hapus!');
            redirect('music');
        }
    }
}
