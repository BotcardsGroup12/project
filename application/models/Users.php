<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Users extends MY_Model {

    function __construct() {
        parent::__construct('users', 'username');
    }

    public function add_user() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'peanuts' => 0,
            'status' => "player",
            'avatar' => $this->input->post('avatar')
        );
        $this->db->insert('users', $data);
        return true;
    }

    function login($username, $password) {
        $this->db->select('username, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
