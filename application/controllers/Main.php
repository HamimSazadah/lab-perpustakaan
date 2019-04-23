<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index($page= 'katalog')
	{
		$this->load->model('perpus_model');
		$data['judul'] = $page;
		switch($page){
			case 'master_buku' : 
			if(!empty($_POST)){
                $this->perpus_model->saveBuku($_POST);
			}
			$data['buku'] = $this->perpus_model->getAllBuku();
		    break;
		}

		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer');
	}
}
