<?php

class Auth_model extends CI_Model
{
    function cek_user($username)
    {
        $this->db->where("username = '$username'");
        $query = $this->db->get('user');
        return $query->row_array();
    }
}
