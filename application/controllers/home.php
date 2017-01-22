<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data["tituloHEAD"]="Bienvenido a mi sitio web";
		$data["tituloH1"]="Bienvenido a mi sitio web";
		$this->load->view('home/index',$data);
	}

	public function acercade()
	{
		$data["tituloHEAD"]="Sobre los autores de esto";
		$data["tituloH1"]="Listado de culpables del sitio";
		$this->load->view('home/acercade', $data);
	}
}
