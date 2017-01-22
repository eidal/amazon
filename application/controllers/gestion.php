<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {


	public function __construct(){
		parent::__construct();
		//para usar bd y grocery
		$this->load->database();
		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		/*$data["tituloHEAD"]="Bienvenido a mi sitio web";
		$data["tituloH1"]="Bienvenido a mi sitio web";*/

		$crud=new grocery_CRUD();
		$crud->set_table('clientes');
		$crud->set_subject('Clientes');

		//invoco al render y lo llevo a output
		$output = $crud->render();

		$this->load->view('gestion/index',$output);
	}


}
