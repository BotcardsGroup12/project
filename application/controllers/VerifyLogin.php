<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Players', '', TRUE);
    }

    function index() {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            echo "<script>
alert('Login Failed');
window.location.href='../login';
</script>";
        } else {
            //Go to private area
            echo "<script>
alert('Login Successful');
window.location.href='../home';
</script>";
        }
    }

    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->Players->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'username' => $row->username,
                    'status' =>$row->status
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            $_SESSION['status'] = $sess_array['status'];
            $_SESSION['username'] = $sess_array['username'];
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

}

?>
