<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function view()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/plain');
		$this->load->view('templates/footer');
	}
}
