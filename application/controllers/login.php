<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$data["tituloHEAD"]="Login Amazonia";
		$data["tituloH1"]="Identifiquese";
		$this->load->view('login/index');
	}

	public function loguearse(){
		$post=$this->input->post();
    	if($post)
    	{
      		$email=$this->input->post('email');
      		$password=$this->input->post('password');
      		/*echo $email;
      		echo $password;*/
      		$this->load->model('clientes_model');
      		try {
        		$cliente = $this->clientes_model->login($email,$password);
      		} catch (Exception $e) {
        		echo $e->errorMessage();
      		}

      		if($cliente){
        		$usuario_data = array(
           		'nombre' => $cliente->nombre,
           		'email' => $cliente->email,
           		'logueado' => TRUE);
        		$this->session->set_userdata($usuario_data);
		        redirect(base_url());
      		}
      		else{
        		$mensaje="Usuario o contraseña incorrectos.";
        		$data= array('mensaje' => $mensaje);
		        $this->load->view('login/index',$data);
      		}
    	}
    	else{
      		$this->index();
    	}
	}

  public function salir() {
      
        $usuario_data = array(
          'nombre'  =>  '',
          'email'   =>  '',
          'logueado'  => FALSE);

          $this->session->set_userdata($usuario_data);
        redirect(base_url());
      }

}
