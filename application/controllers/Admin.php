<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Application {

    function __construct() {
        parent::__construct();
        $this->load->database(); // load database
        $this->load->model('Players'); // load model
    }

    /**
     * Index Page for this controller.
     * About.php
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->data['pagebody'] = 'admin';
        $this->load->model('Players');
        $this->data['users'] = $this->Players->list_user();
        $this->render();
    }
    
    function remove_user($username){
        $this->Players->remove_user($username);
        redirect ('admin');
    }
    //$this->load->view('about');
}
