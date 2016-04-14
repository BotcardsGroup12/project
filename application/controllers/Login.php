<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Index Page for this controller.
     * About.php
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->helper(array('form'));
        $this->data['pagebody'] = 'login';
        $this->render();
    }

    //$this->load->view('about');
}
