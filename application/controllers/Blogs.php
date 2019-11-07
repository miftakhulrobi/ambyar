<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('music_m');
        $this->load->model('video_m');
        $this->load->model('auths_m');
        $this->load->model('categorie_m');
        $this->load->model('blogs_m');
    }

    public function index()
    {
        $data['admin'] = $this->auths_m->get_id('users', 1)->row();

        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/blogs/index', $data);
        $this->load->view('frontend/layout/footer');
        $this->load->view('frontend/blogs/script');
        $this->load->view('frontend/layout/close');
    }

    // ajax

    public function store()
    {
        if ($_FILES['thumbnail']['name']) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './admin/assets/files/blog/';
            $config['remove_space'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('thumbnail')) {
                $thumbnail = $this->upload->data('file_name');
            }

            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'categorie_id' => $this->input->post('categorie_id'),
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'thumbnail' => $thumbnail
            ];
            $result = $this->blogs_m->store('blogs', $data);

            $categorie = $this->categorie_m->get_id('categories', $this->input->post('categorie_id'))->row();
            $cblog = $categorie->cblog + 1;
            $data = [
                'cblog' => $cblog
            ];
            $this->categorie_m->update('categories', $data, $this->input->post('categorie_id'));
            echo json_decode($result);
        } else {
            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'categorie_id' => $this->input->post('categorie_id'),
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
            ];
            $result = $this->blogs_m->store('blogs', $data);

            $categorie = $this->categorie_m->get_id('categories', $this->input->post('categorie_id'))->row();
            $cblog = $categorie->cblog + 1;
            $data = [
                'cblog' => $cblog
            ];
            $this->categorie_m->update('categories', $data, $this->input->post('categorie_id'));

            echo json_decode($result);
        }
    }

    public function getblog()
    {
        $blog = $this->blogs_m->getblog('blogs')->result();
        echo json_encode($blog);
    }

    public function postpopuler()
    {
        $blog = $this->blogs_m->postpopuler('blogs')->result();
        echo json_encode($blog);
    }

    public function getcategorie()
    {
        $categorie = $this->blogs_m->getcategorie('categories')->result();
        echo json_encode($categorie);
    }

    // detail blog
    public function singleblog($id)
    {
        $data['admin'] = $this->auths_m->get_id('users', 1)->row();
        $data['blog'] = $this->blogs_m->getblogid('blogs', $id)->row();
        $data['cnext'] = $this->blogs_m->next('blogs', $id)->num_rows();
        $data['cprev'] = $this->blogs_m->prev('blogs', $id)->num_rows();
        $data['next'] = $this->blogs_m->next('blogs', $id)->row();
        $data['prev'] = $this->blogs_m->prev('blogs', $id)->row();

        $view = $data['blog']->view + 1;
        $update = [
            'view' => $view
        ];
        $this->blogs_m->update('blogs', $update, $id);

        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/blogs/singleblog', $data);
        $this->load->view('frontend/layout/footer');
        $this->load->view('frontend/blogs/scriptlike');
        $this->load->view('frontend/layout/close');
    }

    // LIKE BLOG

    public function getlikeblog($id)
    {
        $data = [
            'blog_id' => $id,
            'user_id' => $this->session->userdata('user_id')
        ];
        $like = $this->blogs_m->getlikeblog('likes', $data)->num_rows();
        echo json_encode($like);
    }

    public function getcountlike($id)
    {
        $blog = $this->blogs_m->getblogid('blogs', $id)->row();
        echo json_encode($blog);
    }

    public function likethisblog()
    {
        $data = [
            'blog_id' => $this->input->post('id'),
            'user_id' => $this->session->userdata('user_id')
        ];
        $result = $this->blogs_m->likethisblog('likes', $data);

        $blog = $this->blogs_m->getblogid('blogs', $this->input->post('id'))->row();
        $blog->like += 1;
        $like = [
            'like' => $blog->like
        ];
        $this->blogs_m->update('blogs', $like, $this->input->post('id'));

        echo json_encode($result);
    }

    public function unlikethisblog()
    {
        $data = [
            'blog_id' => $this->input->post('id'),
            'user_id' => $this->session->userdata('user_id')
        ];
        $result = $this->blogs_m->unlikethisblog('likes', $data);

        $blog = $this->blogs_m->getblogid('blogs', $this->input->post('id'))->row();
        $blog->like -= 1;
        $like = [
            'like' => $blog->like
        ];
        $this->blogs_m->update('blogs', $like, $this->input->post('id'));

        echo json_encode($result);
    }
}
