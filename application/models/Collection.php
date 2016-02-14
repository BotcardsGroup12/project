<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Collection extends CI_Model {
    
    function getToken() {
        return $this->_token;
    }

    function getPiece() {
        return $this->_piece;
    }

    function getPlayer() {
        return $this->_player;
    }

    function getDatetime() {
        return $this->_datetime;
    }

    function setToken($token) {
        $this->_token = $token;
    }

    function setPiece($piece) {
        $this->_piece = $piece;
    }

    function setPlayer($player) {
        $this->_player = $player;
    }

    function setDatetime($datetime) {
        $this->_datetime = $datetime;
    }

        
    function __construct() {
        parent::__construct();
    }
}

