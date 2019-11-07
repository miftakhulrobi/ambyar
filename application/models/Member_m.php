<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_m extends CI_Model
{
    public function getmusic($table, $user_id)
    {
        return $this->db->get_where($table, ['user_id' => $user_id]);
    }

    public function getvideo($table, $user_id)
    {
        return $this->db->get_where($table, ['user_id' => $user_id]);
    }

    // count
    public function getcmusic($table, $user_id)
    {
        return $this->db->get_where($table, ['user_id' => $user_id]);
    }

    public function getcvideo($table, $user_id)
    {
        return $this->db->get_where($table, ['user_id' => $user_id]);
    }

    public function getcblog($table, $user_id)
    {
        return $this->db->get_where($table, ['user_id' => $user_id]);
    }
}
