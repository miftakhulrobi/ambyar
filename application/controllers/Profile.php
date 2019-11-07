<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('auths_m');
    }
    public function index()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/profile/index');
        $this->load->view('admin/layout/footer');
        $this->load->view('admin/profile/script');
        $this->load->view('admin/layout/close');
    }

    public function update()
    {
        $user = $this->auths_m->get_id('users', $this->session->userdata('user_id'))->row();

        $data = [
            'name' => $this->input->post('name'),
        ];
        $this->auths_m->updateprofile('users', $data, $user->user_id);

        if ($_FILES['avatar']['name']) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './admin/assets/files/avatar/';
            $config['remove_space'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('avatar')) {
                $avatar = $this->upload->data('file_name');
            }

            if ($user->avatar) {
                $unlink = './admin/assets/files/avatar/' . $user->avatar;
                is_readable($unlink) && unlink($unlink);
            }

            $thumb = [
                'avatar' => $avatar
            ];
            $this->auths_m->updateprofile('users', $thumb, $user->user_id);
        }
        $this->session->set_flashdata('success', 'Profile berhasil di perbarui!');
        redirect('profile');
    }
}
