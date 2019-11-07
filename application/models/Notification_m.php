<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notification_m extends CI_Model
{
    public function get($table)
    {
        return $this->db->get($table);
    }

    public function get_all($table)
    {
        $this->db->where('notifications.receiver', 1);
        $this->db->order_by('notifications.user_id', 'desc');
        $this->db->join('users', 'users.user_id = notifications.user_id', 'left');
        return $this->db->get($table);
    }

    public function get_id($table, $id)
    {
        $this->db->where(['notif_id' => $id, 'receiver' => 1]);
        $this->db->order_by('notifications.user_id', 'desc');
        $this->db->join('users', 'users.user_id = notifications.user_id', 'left');
        return $this->db->get($table);
    }

    public function storemember($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function storeadmin($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function getcount_newuser($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function getcount_notifmember($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function open($table, $open, $id)
    {
        $this->db->where('notif_id', $id);
        return $this->db->update($table, $open);
    }

    // member
    public function get_allmember($table, $user_id)
    {
        return $this->db->get_where($table, ['receiver' => $user_id]);
    }
}
