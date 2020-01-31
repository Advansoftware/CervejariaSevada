<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Produtos extends Geral {
	public function __construct()
		{
			parent::__construct();
			$this->validaIdade();
			$this->load->model('Produtos_model');
		}

		public function index()
		{
			$data['produtos'] = $this->Produtos_model->getProdutos();
			$data['title'] = "Produtos";
			$this->inicio($data,0);
			$this->load->view('produtos/produtos');
			$this->load->view('template/footer');
		}
		public function exibe($id){
			$dados['produtos'] = $id;
			$this->load->view('produtos/exibe', $dados);
		}
}
?>
