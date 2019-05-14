<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index($page= 'katalog')
	{
		$_SESSION['login'] = isset($_SESSION['login'])?$_SESSION['login']:false;
		if(!$_SESSION['login']){
			redirect(base_url().'index.php/main/login');
		}
		$this->load->model('perpus_model');
		$data['judul'] = $page;
		switch($page){
			case 'master_buku' : 
			if(!empty($_POST) && empty($_GET)){
                $this->perpus_model->saveBuku($_POST);
			}
			$data['buku'] = $this->perpus_model->getAllBuku();
			if(!empty($_GET['act'])){
				switch($_GET['act']){
					case 'del' : 
						$this->perpus_model->deleteBuku($_GET['id']);
						redirect(base_url().'index.php/main/index/master_buku');
					case 'edit' :
						$data['edit'] =  $this->perpus_model->getBuku($_GET['id']);
						break;
					case 'update' :
						$this->perpus_model->updateBuku($_POST);
						redirect(base_url().'index.php/main/index/master_buku');
				}
			}
		    break;
		}

		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer');
	}

	public function login(){
		if(!empty($_POST)){
			$this->load->model('perpus_model');
			$d = $this->perpus_model->login($_POST['username'],$_POST['password']);
			if(isset($d)){
				$_SESSION['login'] = true;
				$_SESSION['nama'] = $d->nama;
				$_SESSION['level'] = $d->level;
				redirect(base_url().'index.php/main/index/master_buku');
			}
		}
		$this->load->view('pages/login');
	}

	public function logout(){
		session_destroy();
		redirect(base_url());
	}
}
