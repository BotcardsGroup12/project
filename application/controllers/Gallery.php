<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Application {

	/**
         * Gallery.php
	 */
	public function index()
	{
            $this->data['pagebody'] = 'gallery';
            $this->render();
	}
}
