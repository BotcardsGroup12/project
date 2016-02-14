<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Transaction extends CI_Model {
    
    function getSeries() {
        return $this->_series;
    }

    function getDescription() {
        return $this->_description;
    }

    function getFrequency() {
        return $this->_frequency;
    }

    function getValue() {
        return $this->_value;
    }

    function setSeries($series) {
        $this->_series = $series;
    }

    function setDescription($description) {
        $this->_description = $description;
    }

    function setFrequency($frequency) {
        $this->_frequency = $frequency;
    }

    function setValue($value) {
        $this->_value = $value;
    }

        
    function __construct() {
        parent::__construct();
    }
}

