<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends Application {

    /**
     * Index Page for this controller.
     * About.php
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        //$this->load->view('about');
        $this->data['pagebody'] = 'register';
        $this->render();
    }

    public function do_register() {
        if ($this->input->post('register')) {//$_POST["register"];
            $this->load->model('Players'); //loads the user_model.php file in models folder
            if ($this->Players->add_user()) {
                echo "<script>
alert('Registered Successfully');
window.location.href='../home';
</script>";
            } else {
                "<script>
alert('Register Failed');
window.location.href='../home';
</script>";
            }
        }
    }

}
