<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function viewPage($page){
		$this->load->view(''.$page.'');
	}

}