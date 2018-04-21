<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	function __construct() { //constructor de la clase
			parent::__construct();
			$this->load->model('categorias_model','',TRUE); //cuando cargues el constructor me cargas estos datos
	}

	public function index()
	{
		$data["tituloHEAD"]="Bienvenido a mi sitio web";
		$data["tituloH1"]="Bienvenido a mi sitio web";
		$data["categoriasp"]=$this->categorias_model->get_padres();
		$data["categoriash"]=$this->categorias_model->get_hijos();
		$data["categdestacadas"]=$this->categorias_model->get_destacadas();		
		$this->load->view('/categorias/index',$data);
	}

}
