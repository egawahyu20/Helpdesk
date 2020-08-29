<?php

class Admin_model extends CI_Model
{
    function get_data_login($email){
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        return $user;
    }
}
