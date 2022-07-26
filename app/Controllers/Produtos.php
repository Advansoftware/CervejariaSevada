<?php namespace App\Controllers;

class Produtos extends BaseController
{
	//$this->validaIdade();
	//$this->load->model('Produtos_model');
		public function index()
		{
			helper('url_helper');
			helper('url');
			helper('html');
			helper('form');
			helper('cookie');
		  	$data['produtos'] = $this->Produtos_model->getProdutos();
			$data['title'] = "Produtos";
			echo view('template/head',$data);
			echo view('template/menu');
			echo view('produtos/produtos');
			echo view('template/footer');
		}
	//	public function exibe($id){
			//$data['produtos'] = $this->Produtos_model->getProdutosById($id);
			//$this->load->view('produtos/exibe', $data);
	//	}
}
?>
