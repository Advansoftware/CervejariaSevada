<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Visitacao extends Geral {
	public function __construct()
		{
			parent::__construct();
		}
	public function index(){
		$dados['title'] = "Visistação";
		$this->inicio($dados);
		$this->load->view('licitacoes/licitacoes');
		$this->load->view('template/footer');
		
	}

}
?>
