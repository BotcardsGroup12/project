<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Series extends CI_Model {
    
    private $_datetime;
    private $_player;
    private $_series;
    private $_trans;
    
    function getDatetime() {
        return $this->_datetime;
    }

    function getPlayer() {
        return $this->_player;
    }

    function getSeries() {
        return $this->_series;
    }

    function getTrans() {
        return $this->_trans;
    }

    function setDatetime($datetime) {
        $this->_datetime = $datetime;
    }

    function setPlayer($player) {
        $this->_player = $player;
    }

    function setSeries($series) {
        $this->_series = $series;
    }

    function setTrans($trans) {
        $this->_trans = $trans;
    }

        
    function __construct() {
        parent::__construct();
    }
}

