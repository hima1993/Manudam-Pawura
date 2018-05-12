<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Others extends CI_Controller {

	public function GoAboutUs() {
		$this->load->view('AboutUs');
	}

	public function GoBlog() {

		$this->load->view('blog');

	}
	public function GoEquip() {

		$this->load->view('equipments');

	}

	public function GoContact() {

		$this->load->view('contact');

	}
	public function GoVolunteer() {

		$this->load->view('volunteer');

	}
	public function Godonate() {

		$this->load->view('donation');

	}

}