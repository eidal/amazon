<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cesta extends CI_Controller {

	function __construct() { //constructor de la clase
			parent::__construct();
			$this->load->model('articulos_model','',TRUE); //cuando cargues el constructor me cargas estos datos
	}

	public function index()
	{
		$data["tituloHEAD"]="Bienvenido a mi sitio web";
		$data["tituloH1"]="Bienvenido a mi sitio web";
		$data["articulos"]=$this->articulos_model->get_all();	
		$this->load->view('/cesta/index',$data);
	}

	public function comprar($id){


	$articulo=$this->articulos_model->get_articuloredux($id);
	$data = array(
       'id'      => $articulo->codart,
       'qty'     => 1,
       'price'   => $articulo->precios,
       'name'    => $articulo->desart);

	$this->cart->insert($data);
	$this->load->view('/cesta/index');
	}

	function eliminar($rowid){
		$this->cart->update(array('rowid' => $rowid ,'qty' => 0));
		redirect('cesta/index');
	}

	function update(){
		$i=1;
		foreach($this->cart->contents() as $items){
			$this->cart->update(array('rowid' => $items['rowid'], 'qty' => $_POST['qty'.$i]));
			$i++;
		}
		redirect('cesta/index');

	}

	public function paypal()
    {	
    	if($this->session->userdata('logueado')){
        	$config['business'] = 'azarrouk00@gmail.com';//email que debe cobrar los productos
        	$config['cpp_header_image'] = base_url('imagenes/amazonia.jpg'); //Url de una imagen de 750 px ancho por 90 px de alto
        	$config['return'] = base_url('cesta/success');//donde nos retorna si todo sale bien con los datos
        	$config['cancel_return'] = base_url('cesta/index');//si el usuario cancela desde paypal
        	$config['notify_url'] = base_url('cesta/data_paypal_post'); //IPN Post, en return hacemos esto
        	$config['production'] = false; //Poner en falso para utilizar sandbox, true para paypal
        	$config['discount_rate_cart'] = 0; //Si queremos aplicar descuento
        	$config["invoice"] = rand(1000,10000); //El id de la factura, por supuesto hay que poner otro
 
        	$this->load->library('paypal', $config);
 
        	$carrito = $this->cart->contents();
 
        	foreach($carrito as $rows)
        	{
            	$this->paypal->add($rows['name'],$rows['price'],$rows['qty']);
        	}
 
        	$this->paypal->pay();
        }
        else{
        	redirect(base_url('login/index'));
        }
    }

    public function vaciar_carrito()
    {
        $this->cart->destroy();
        redirect(base_url('home/index'));
    }
 
    public function success()
    {
    	//faltaria volcar al pedido
        $this->cart->destroy();
        print_r($_POST);
    }
	

}
