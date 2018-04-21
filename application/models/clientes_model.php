<?php

Class Clientes_model extends CI_Model {

		public function existeEmail($email) {
			$result= $this->db->query("SELECT * FROM cliente WHERE email = '".$email."'");
	    return $result->row();
		}

		public function insertarCliente($email,$password,$nombre,$apellidos) {

			$pass_md5 = md5($password);
			$data = array(
				'email'		=>	$email,
				'password'	=>	$pass_md5,
				'nombre'	=>	$nombre,
				'apellidos'	=>	$apellidos);

			$this->db->insert('cliente',$data);
		}

		public function desactivaCliente($email=null) {
	
			$data = array(
				'activo'	=>	0);
			
			$this->db->where('email',$email);
			$this->db->update('cliente', array('email' => $email));
		}

		public function editaCliente($email,$password,$nombre,$apellidos,$telefono) {

			$pass_md5= md5($password);
			$data = array(	 
				'email'		=>	$email,
				'password'	=>	$password,
				'nombre'	=>	$nombre,
				'apellidos'	=>	$apellidos,
				'telefono'	=>	$telefono);
	 
			$this->db->where('id',$id);
			$this->db->update('cliente',$data);
			}

		public function editaCliente2($email,$password,$nombre,$apellidos) {

			$pass_md5= md5($password);
			$data = array(	 
				'email'		=>	$email,
				'password'	=>	$password,
				'nombre'	=>	$nombre,
				'apellidos'	=>	$apellidos);
	 
			$this->db->where('id',$id);
			$this->db->update('cliente',$data);
			}


		public function login($email,$password){

			$pass_md5 = md5($password);
	    	$result= $this->db->query("SELECT * FROM cliente WHERE email = '".$email."' AND password = '".$pass_md5."'");
			return $result->row();
		}

}
?>
