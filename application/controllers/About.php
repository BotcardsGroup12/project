<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application {

	/**
	 * Index Page for this controller.
	 * About.php
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            //$this->load->view('about');
            $this->data['pagebody'] = 'about';
            $this->render();
	}
}
