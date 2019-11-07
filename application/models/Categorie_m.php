<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorie_m extends CI_Model
{
    public function get($table)
    {
        return $this->db->get($table);
    }

    public function get_id($table, $id)
    {
        return $this->db->get_where($table, ['categorie_id' => $id]);
    }

    public function update($table, $data, $id)
    {
        $this->db->where('categorie_id', $id);
        return $this->db->update($table, $data);
    }
}
