<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_m extends CI_Model
{
    public function get($table)
    {
        return $this->db->get($table);
    }

    public function get_all($table)
    {
        $this->db->join('users', 'users.user_id = videos.user_id', 'left');
        return $this->db->get($table);
    }

    public function get_id($table, $id)
    {
        return $this->db->get_where($table, ['video_id' => $id]);
    }

    public function store($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function destroy($table, $id)
    {
        $this->db->where('video_id', $id);
        $this->db->delete($table);
    }
}
