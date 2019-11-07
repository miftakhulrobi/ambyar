<?php

function check_not_login()
{
    $ci = &get_instance();
    $user = $ci->session->userdata('user_id');

    if (!$user) {
        redirect('auths/login');
    }
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('auth');

    if ($ci->auth->user()->role != 'Admin') {
        redirect('/');
    }
}

function check_member()
{
    $ci = &get_instance();
    $ci->load->library('auth');

    if ($ci->auth->user()->role != 'Member') {
        redirect('/');
    }
}
