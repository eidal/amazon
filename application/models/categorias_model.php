<?php

Class Categorias_model extends CI_Model {

		public function get_padres() {
			$result= $this->db->query("SELECT * from categoria where isnull(categoria_idcategoria)=1 and activo=1 order by idcategoria");

			return $result->result();
		}

		public function get_hijos() {
			$result= $this->db->query("SELECT * from categoria where isnull(categoria_idcategoria)=0 and activo=1 order by categoria_idcategoria");

			return $result->result();
		}

		public function get_nombre($categoria) {
			$result= $this->db->query("SELECT nombre FROM categoria WHERE idcategoria='".$categoria."'");

			return $result->row();
		}

		public function get_destacadas() {
			$result= $this->db->query("SELECT * FROM categoria WHERE destacada=1");

			return $result->result();
		}

}
?>
