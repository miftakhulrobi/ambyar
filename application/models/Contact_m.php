<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_m extends CI_Model
{
    public function get($table)
    {
        $this->db->order_by('contact_id', 'desc');
        return $this->db->get($table);
    }

    public function get_count_message($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function store($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update($table, $data, $id)
    {
        $this->db->where('contact_id', $id);
        return $this->db->update($table, $data);
    }

    public function get_id($table, $id)
    {
        return $this->db->get_where($table, ['contact_id' => $id]);
    }

    public function destroyall($table)
    {
        $this->db->empty_table($table);
    }
}
