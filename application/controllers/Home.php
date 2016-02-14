<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
            $this->data['pagebody'] = 'home';
            $this->render();
	}
}
