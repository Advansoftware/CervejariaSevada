<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Produtos extends Geral {
	public function __construct()
		{
			parent::__construct();
			$this->validaIdade();
		}

		public function index()
		{
			$data['title'] = "Produtos";
			$this->inicio($data,0);
			$this->load->view('produtos');
			$this->load->view('template/footer');
		}
}
?>
