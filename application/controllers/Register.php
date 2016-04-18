<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends Application {

    var $config;
    var $fileName;
    
    function __construct()
    {
        parent::__construct();

    }
    
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
        
        $this->config =  array(
          'upload_path'     => "./uploads/",
          'allowed_types'   => "gif|jpg|png|jpeg",
          'overwrite'       => TRUE,
          'max_size'        => "10000KB"
        );
                
        $this->load->library('upload', $this->config);
        if($this->upload->do_upload('userfile'))
        {
            $fileName = $this->upload->data()['file_name'];
        
            if ($this->input->post('register')) {  //$_POST["register"];
                $this->load->model('Players');     //loads the user_model.php file in models folder
                if ($this->Players->add_user($fileName)) {

                    $sess_array = array(
                        'username' => $this->input->post('username'),
                        'status' => 'player'
                    );
                    $this->session->set_userdata('logged_in', $sess_array);

                    $_SESSION['status'] = $sess_array['status'];
                    $_SESSION['username'] = $sess_array['username'];                

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
        else
        {
            echo "<script>
                    alert('Please select a proper avatar');
                    window.location.href='../register';
                  </script>";
        }
    }

}
