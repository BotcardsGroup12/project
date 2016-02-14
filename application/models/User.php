<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class User extends CI_Model {
    
    private $_username;
    private $_userpassword;
    private $_usercash;
    
    function getUsername() {
        return $this->_username;
    }

    function getUserpassword() {
        return $this->_userpassword;
    }

    function getUsercash() {
        return $this->_usercash;
    }

    function setUsername($username) {
        $this->_username = $username;
    }

    function setUserpassword($userpassword) {
        $this->_userpassword = $userpassword;
    }

    function setUsercash($usercash) {
        $this->_usercash = $usercash;
    }

        function __construct() {
        parent::__construct();
    }
}

