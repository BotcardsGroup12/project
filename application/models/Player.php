<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Player extends CI_Model {
    
    private $_player;
    private $_peanuts;
    
    function getPlayer() {
        return $this->_player;
    }

    function getPeanuts() {
        return $this->_peanuts;
    }

    function setPlayer($player) {
        $this->_player = $player;
    }

    function setPeanuts($peanuts) {
        $this->_peanuts = $peanuts;
    }

        
    function __construct() {
        parent::__construct();
    }
}

