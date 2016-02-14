<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends Application {

	/**
         * Gallery.php
	 */
	public function index()
	{
            $this->data['pagebody'] = 'portfolio';
            $this->render();
	}
}
