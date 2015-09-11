<?php 

class Beneficios extends CI_Controller{



	public function index()
	{
		$this->load->helper('url');
		$this->load->view('plantilla/header');
		$this->load->view('beneficios/index');
		$this->load->view('plantilla/footer');
		
	}
}

 ?>