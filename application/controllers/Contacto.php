<?php 

class Contacto extends CI_Controller{



	public function index()
	{
		$this->load->helper('url');
		$this->load->view('plantilla/header');
		$this->load->view('contacto/index');
		$this->load->view('plantilla/footer');
		
	}
}

 ?>