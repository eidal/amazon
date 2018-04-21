<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {

	function __construct() { //constructor de la clase
			parent::__construct();
			$this->load->model('articulos_model','',TRUE); //cuando cargues el constructor me cargas estos datos
			$this->load->model('categorias_model','',TRUE);
	}

	public function index()
	{
		$data["tituloHEAD"]="Bienvenido a mi sitio web";
		$data["tituloH1"]="Bienvenido a mi sitio web";
		$data["articulos"]=$this->articulos_model->get_all();
		$data["categdestacadas"]=$this->categorias_model->get_destacadas();	
		$this->load->view('/articulos/index',$data);
	}

	public function ofertas()
	{
		$data["tituloHEAD"]="Artículos en Oferta";
		$data["tituloH1"]="¡Aprovéchese de los artículos que tenemos en oferta para usted!";
		$data["articulos"]=$this->articulos_model->get_ofertas();
		$data["categdestacadas"]=$this->categorias_model->get_destacadas();			
		$this->load->view('/articulos/ofertas',$data);
	}

	public function categoria($categoria){

		$data["tituloHEAD"]="Artículos de la categoria ".$categoria;
		$data["tituloH1"]="¡Aprovéchese de los artículos que tenemos en oferta para usted!";
		$data["articulos"]=$this->articulos_model->get_artcategoria($categoria);
		$data["categoria"]=$categoria;
		$data["categdestacadas"]=$this->categorias_model->get_destacadas();	
		$data["categnombre"]=$this->categorias_model->get_nombre($categoria);		
		$this->load->view('/articulos/artic_categoria',$data);
	}

	public function buscar(){
		$post=$this->input->post();
    	if($post)
    	{
   		$busqueda=$this->input->post('buscar');
		$data["tituloHEAD"]="Artículos en Oferta";
		$data["tituloH1"]="¡Aprovéchese de los artículos que tenemos en oferta para usted!";
		$data["articulos"]=$this->articulos_model->get_busqueda($busqueda);
		$data["categdestacadas"]=$this->categorias_model->get_destacadas();			
		$this->load->view('/articulos/busqueda',$data);
		}
		else{
			$this->index();
		}
	}

	public function id($id){

		if(!$id) {
	      show_404();
    	  return;
    	}

		$data["tituloHEAD"]="Artículos en Oferta";
		$data["tituloH1"]="¡Aprovéchese de los artículos que tenemos en oferta para usted!";
		$data["articulo"]=$this->articulos_model->get_articulo($id);
		$data["categdestacadas"]=$this->categorias_model->get_destacadas();			
		$this->load->view('/articulos/id',$data);
	}
}
