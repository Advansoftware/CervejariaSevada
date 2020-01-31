<?php
		class Produtos_model extends CI_Model {

		public function __construct()
			{
				$this->load->database();
			}
		public function getProdutos(){
			$result = $this->db->query("select * from produtos");
			return $result->result_array();
		}
		public function getProdutosById($id){
			$result = $this->db->query("select * from produtos where id=$id");
			return $result->result_array();
		}
}
?>
