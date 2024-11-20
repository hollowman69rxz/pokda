<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login($email, $password)
    {
        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function register($data)
    {
        return $this->db->insert('users', $data);
    }
}