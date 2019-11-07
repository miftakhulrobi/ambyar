<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('video_m');
    }
    public function index()
    {
        $data['video'] = $this->video_m->get_all('videos')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/video/index', $data);
        $this->load->view('admin/layout/footer');
        $this->load->view('admin/video/script');
        $this->load->view('admin/layout/close');
    }

    public function store()
    {
        if ($_FILES['video']['name']) {
            $config['allowed_types'] = 'mp4';
            $config['max_size']     = '10048';
            $config['upload_path'] = './admin/assets/files/video/';
            $config['remove_space'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('video')) {
                $video = $this->upload->data('file_name');
            }

            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'video' => $video,
            ];
            $this->video_m->store('videos', $data);

            $this->session->set_flashdata('success', 'Berhasil mengupload video!');
            redirect('video');
        }
    }

    public function show($id)
    {
        $data['video'] = $this->video_m->get_id('videos', $id)->row();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/video/show', $data);
        $this->load->view('admin/layout/footer');
        $this->load->view('admin/layout/close');
    }

    public function destroy($id)
    {
        $video = $this->video_m->get_id('videos', $id)->row();
        $video = './admin/assets/files/video/' . $video->video;

        if (is_readable($video) && unlink($video)) {
            $this->video_m->destroy('videos', $id);

            $this->session->set_flashdata('success', 'Data berhasil di hapus!');
            redirect('video');
        }
    }
}
