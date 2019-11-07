<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('file_m');
    }

    public function music()
    {
        $total = $this->file_m->getmusic('musics')->num_rows();

        $config['base_url'] = base_url() . 'file/music';
        $config['total_rows'] = $total;
        $config['per_page'] = 12;
        $config['num_links'] = $total;

        $config['full-tag-open'] = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full-tag-close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';

        $config['attributes'] = ['class' => 'page-link'];

        $this->pagination->initialize($config);

        if ($this->uri->segment('3')) {
            $start = $this->uri->segment('3');
        } else {
            $start = 0;
        }

        $data['music'] = $this->file_m->getmusicdata('musics', $config['per_page'], $start)->result();

        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);

        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/file/music', $data);
        $this->load->view('frontend/layout/footer');
        $this->load->view('frontend/layout/close');
    }

    public function video()
    {
        $total = $this->file_m->getvideo('videos')->num_rows();

        $config['base_url'] = base_url() . 'file/video';
        $config['total_rows'] = $total;
        $config['per_page'] = 12;
        $config['num_links'] = $total;

        $config['full-tag-open'] = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full-tag-close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';

        $config['attributes'] = ['class' => 'page-link'];

        $this->pagination->initialize($config);

        if ($this->uri->segment('3')) {
            $start = $this->uri->segment('3');
        } else {
            $start = 0;
        }

        $data['video'] = $this->file_m->getvideodata('videos', $config['per_page'], $start)->result();

        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);

        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/file/video', $data);
        $this->load->view('frontend/layout/footer');
        $this->load->view('frontend/layout/close');
    }

    public function videodetail($id)
    {
        $data['video'] = $this->file_m->getvideoid('videos', $id)->row();

        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/file/videodetail', $data);
        $this->load->view('frontend/layout/footer');
        $this->load->view('frontend/layout/close');
    }
}
