<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() { //constructor de la clase
			parent::__construct();
			$this->load->model('articulos_model','',TRUE); //cuando cargues el constructor me cargas estos datos
			$this->load->model('categorias_model','',TRUE);
	}

	public function index()
	{
		$data["tituloHEAD"]="Bienvenido a mi sitio web";
		$data["tituloH1"]="Bienvenido a mi sitio web";
		$data["articulos"]=$this->articulos_model->get_destacados();
		$data["categdestacadas"]=$this->categorias_model->get_destacadas();	
		$this->load->view('/home/index',$data);
	}

}
