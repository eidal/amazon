<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrarse extends CI_Controller {


	public function index()
	{
		$data["tituloHEAD"]="Regístrese en Amazonia";
		$data["tituloH1"]="Introduzca sus datos";
		$this->load->view('registrarse/index');
	}

	public function condiciones(){
		$this->load->view('registrarse/condiciones');
	}

	public function registrar(){

    $post=$this->input->post();
    if($post)
    {
      $nombre=$this->input->post('nombre');
      $apellidos=$this->input->post('apellidos');
      $email=$this->input->post('email');
      $password=$this->input->post('password');

      $this->load->model('clientes_model');

      $existe=$this->clientes_model->existeEmail($email);

      if($existe){
      	$mensaje=" ".$email.", ya existente elija otro";
      	$data= array('mensaje' => $mensaje);
		$this->load->view('registrarse/index',$data);
      }
      else{
      	try {

        	$nuevo_cliente = $this->clientes_model->insertarCliente(
    					$email,
    					$password,
    					$nombre,
    					$apellidos);

        	$mensaje=" ".$nombre.", Te has registrado correctamente";

      	} catch (Exception $e) {
        	$mensaje=$e->errorMessage();
      	}	

      	$data= array('mensaje' => $mensaje);
      	$this->load->view('login/index',$data);
    	}
	}
    else
    {

      $this->index();

    }

  }


}
?>
