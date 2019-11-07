<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_m extends CI_Model
{
    public function getmusic($table)
    {
        $this->db->limit(4);
        $this->db->order_by('music_id', 'desc');
        return $this->db->get($table);
    }

    public function getvideo($table)
    {
        $this->db->limit(4);
        $this->db->order_by('video_id', 'desc');
        return $this->db->get($table);
    }

    public function getblog($table, $limit)
    {
        $this->db->limit($limit);
        $this->db->order_by('blog_id', 'desc');
        return $this->db->get($table);
    }
}
