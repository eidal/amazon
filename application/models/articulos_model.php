<?php

Class Articulos_model extends CI_Model {

		public function get_all() {
			$result= $this->db->query("SELECT codart,left(desart,22) as desart,left(desampliada,80) as desampliada,round(precio,2) as precio,round(precOferta,2) as precOferta,round(if(enOferta=true,precOferta,precio),2) as precios,opinion,imagen,(select count(*) from opinion where articulo_codart=articulo.codart) as num_opinion FROM articulo WHERE activo=1");

			return $result->result();
		}

		public function get_ofertas() {
			$result= $this->db->query("SELECT codart,left(desart,22) as desart,left(desampliada,80) as desampliada,round(precio,2) as precio,round(precOferta,2) as precOferta,round(if(enOferta=true,precOferta,precio),2) as precios,opinion,imagen,(select count(*) from opinion where articulo_codart=articulo.codart) as num_opinion FROM articulo WHERE enoferta=1 and activo=1");

			return $result->result();
		}

		public function get_articulo($id) {
			$result= $this->db->query("SELECT codart,desart,desampliada,round(precio,2) as precio,round(precOferta,2) as precOferta,round(if(enOferta=true,precOferta,precio),2) as precios,opinion,imagen,(select count(*) from opinion where articulo_codart=articulo.codart) as num_opinion FROM articulo WHERE codart='".$id."' and activo=1");

			return $result->row();
		}

		public function get_articuloredux($id) {
			$result= $this->db->query("SELECT codart,left(desart,28) as desart,round(if(enOferta=true,precOferta,precio),2) as precios FROM articulo WHERE codart='".$id."' and activo=1");

			return $result->row();
		}

		public function get_destacados() {
			$result= $this->db->query("SELECT codart,left(desart,22) as desart,left(desampliada,80) as desampliada,round(precio,2) as precio,round(precOferta,2) as precOferta,round(if(enOferta=true,precOferta,precio),2) as precios,opinion,imagen,(select count(*) from opinion where articulo_codart=articulo.codart) as num_opinion FROM articulo WHERE destacado=1 and activo=1");

			return $result->result();
		}

		public function get_artcategoria($categoria) {
			$result= $this->db->query("SELECT codart,left(desart,22) as desart,left(desampliada,80) as desampliada,round(precio,2) as precio,round(precOferta,2) as precOferta,round(if(enOferta=true,precOferta,precio),2) as precios,opinion,imagen,(select count(*) from opinion where articulo_codart=a.codart) as num_opinion FROM articulo a inner join categoria_has_articulo c on a.codart=c.articulo_codart WHERE c.categoria_idcategoria='".$categoria."' and activo=1");

			return $result->result();
		}

		public function get_busqueda($buscar) {
			$result= $this->db->query("SELECT codart,left(desart,22) as desart,left(desampliada,80) as desampliada,round(precio,2) as precio,round(precOferta,2) as precOferta,round(if(enOferta=true,precOferta,precio),2) as precios,opinion,imagen,(select count(*) from opinion where articulo_codart=articulo.codart) as num_opinion FROM articulo WHERE (codart like  '%".$buscar."%' or desart like  '%".$buscar."%' or desampliada like  '%".$buscar."%') and activo=1");

			return $result->result();
		}


}
?>
