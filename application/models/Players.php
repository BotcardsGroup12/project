<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Players extends MY_Model {

    function __construct() {
        parent::__construct('players', 'Player');
    }

    public function add_user() {
        $data = array(
            'username' => $this->input->post('username'),
            'player' => $this->input->post('nickname'),
            'password' => $this->input->post('password'),
            'peanuts' => 0,
            'status' => "player",
            'avatar' => $this->input->post('avatar')
        );
        $this->db->insert('players', $data);
        return true;
    }

    function list_user() {
        $this->db->select('username,player');
        $this->db->from('players');
        $this->db->where('status="player"');
        $q= $this->db->get();
        return $q->result();
    }
    
    function remove_user($username){
        $this->db->where('username', $username);
        $this->db->delete('players');
    }

    function login($username, $password) {
        $this->db->select('username, password, status');
        $this->db->from('players');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
