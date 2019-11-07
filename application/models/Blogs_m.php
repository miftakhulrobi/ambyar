<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs_m extends CI_Model
{
    public function getblog($table)
    {
        $this->db->limit(4);
        $this->db->order_by('blog_id', 'desc');
        $this->db->join('users', 'users.user_id = blogs.user_id', 'left');
        $this->db->join('categories', 'categories.categorie_id = blogs.categorie_id', 'left');
        return $this->db->get($table);
    }

    public function getblogid($table, $id)
    {
        $this->db->join('users', 'users.user_id = blogs.user_id', 'left');
        return $this->db->get_where($table, ['blog_id' => $id]);
    }

    public function next($table, $id)
    {
        $this->db->where('blog_id >', $id);
        return $this->db->get_where($table);
    }

    public function prev($table, $id)
    {
        $this->db->where('blog_id <', $id);
        return $this->db->get_where($table);
    }

    public function postpopuler($table)
    {
        $this->db->limit(4);
        $this->db->order_by('view', 'desc');
        return $this->db->get($table);
    }

    public function getcategorie($table)
    {
        return $this->db->get($table);
    }

    public function store($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update($table, $data, $id)
    {
        $this->db->where('blog_id', $id);
        return $this->db->update($table, $data);
    }

    public function get($table)
    {
        return $this->db->get($table);
    }

    // GET IMG GLOBAL
    public function imgblog($table, $limit)
    {
        $this->db->limit($limit);
        return $this->db->get($table);
    }

    // LIKE BLOG
    public function getlikeblog($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    public function likethisblog($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function unlikethisblog($table, $data)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }
}
