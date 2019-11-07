<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auths extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auths_m');
        $this->load->model('notification_m');
    }

    public function login()
    {
        $user = $this->session->userdata('role');
        if ($user == 'Admin') {
            redirect('dashboard');
        } elseif ($user == 'Member') {
            redirect('profilemember');
        }

        $this->load->view('auth/layout/header');
        $this->load->view('auth/login');
        $this->load->view('auth/layout/footer');
    }

    public function postlogin()
    {
        $data = [
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        ];
        $query = $this->auths_m->postlogin('users', $data);
        if ($query->num_rows() > 0) {
            $user = $query->row();

            $param = [
                'user_id' => $user->user_id,
                'email' => $user->email,
                'role' => $user->role
            ];
            $this->session->set_userdata($param);

            if ($user->role == 'Admin') {
                $this->session->set_flashdata('success', 'Haloo ' . $user->name . '');
                redirect('dashboard');
            } elseif ($user->role == 'Member') {
                $this->session->set_flashdata('success', 'Haloo ' . $user->name . '');
                redirect('profilemember');
            } else {
                $this->session->set_flashdata('error', 'Anda tidak mempunyai role!');
                redirect('auths/login');
            }
        } else {
            $this->session->set_flashdata('error', 'Login gagal. email / password salah!');
            redirect('auths/login');
        }
    }

    // logout
    public function logout()
    {
        $params = array('user_id', 'email', 'role');
        $this->session->unset_userdata($params);

        $this->session->set_flashdata('success', 'Anda berhasil logout!');
        redirect('auths/login');
    }

    // register

    public function register()
    {
        $this->load->view('auth/layout/header');
        $this->load->view('auth/register');
        $this->load->view('auth/layout/footer');
    }

    public function postregister()
    {
        $email = $this->auths_m->getemail('users', $this->input->post('email'))->num_rows();
        if (!$email) {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'role' => 'Member'
            ];
            $this->auths_m->postregister('users', $data);

            $user = $this->auths_m->getnewuser('users', $this->input->post('email'))->row();
            $messagemember = [
                'user_id' => $user->user_id,
                'receiver' => $user->user_id,
            ];
            $this->notification_m->storemember('notifications', $messagemember);

            $messageadmin = [
                'user_id' => $user->user_id,
                'receiver' => 1,
            ];
            $this->notification_m->storeadmin('notifications', $messageadmin);

            $this->session->set_flashdata('success', 'Akun anda berhasil di buat, Silahkan login!');
            redirect('auths/login');
        } else {
            $this->session->set_flashdata('error', 'Email ini sudah digunakan orang lain!');
            redirect('auths/register');
        }
    }
}
