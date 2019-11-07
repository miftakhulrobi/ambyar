<?php

class Auth
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('auths_m');
        $this->ci->load->model('contact_m');
        $this->ci->load->model('notification_m');
        $this->ci->load->model('blogs_m');
    }

    function user()
    {
        $user_id = $this->ci->session->userdata('user_id');
        $user_data = $this->ci->auths_m->get_id('users', $user_id)->row();
        return $user_data;
    }

    function app()
    {
        $app = $this->ci->auths_m->app('apps', 1)->row();
        return $app;
    }

    function cmessage()
    {
        $where = [
            'open' => 0
        ];
        $contact = $this->ci->contact_m->get_count_message('contacts', $where)->num_rows();
        return $contact;
    }

    function cnotification()
    {
        $where = [
            'open' => 0,
            'receiver' => 1
        ];
        $notif = $this->ci->notification_m->getcount_newuser('notifications', $where)->num_rows();
        return $notif;
    }

    function cnotificationmember()
    {
        $where = [
            'open' => 0,
            'receiver' => $this->ci->session->userdata('user_id')
        ];
        $notif = $this->ci->notification_m->getcount_notifmember('notifications', $where)->num_rows();
        return $notif;
    }

    function imgblog()
    {
        $img = $this->ci->blogs_m->imgblog('blogs', 8)->result();
        return $img;
    }
}
