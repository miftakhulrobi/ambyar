<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auths_m extends CI_Model
{
    public function postlogin($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    public function postregister($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function get($table)
    {
        return $this->db->get_where($table, ['role' => 'Member']);
    }

    public function get_all($table)
    {
        return $this->db->get($table);
    }

    public function get_id($table, $user_id)
    {
        return $this->db->get_where($table, ['user_id' => $user_id]);
    }

    public function app($table, $id)
    {
        return $this->db->get_where($table, ['app_id' => $id]);
    }

    public function updateprofile($table, $data, $user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->update($table, $data);
    }

    public function updateapp($table, $data, $id)
    {
        $this->db->where('app_id', $id);
        return $this->db->update($table, $data);
    }

    public function getnewuser($table, $email)
    {
        return $this->db->get_where($table, ['email' => $email]);
    }

    public function getemail($table, $email)
    {
        return $this->db->get_where($table, ['email' => $email]);
    }
}
