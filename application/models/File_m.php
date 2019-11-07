<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_m extends CI_Model
{
    public function getmusic($table)
    {
        return $this->db->get($table);
    }

    public function getmusicdata($table, $finish, $start)
    {
        return $this->db->get($table, $finish, $start);
    }

    public function getvideo($table)
    {
        return $this->db->get($table);
    }

    public function getvideodata($table, $finish, $start)
    {
        return $this->db->get($table, $finish, $start);
    }

    public function getvideoid($table, $id)
    {
        return $this->db->get_where($table, ['video_id' => $id]);
    }
}
