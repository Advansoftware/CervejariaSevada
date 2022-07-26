<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Home extends Geral
{
	public function __construct()
	{
		parent::__construct();
		$this->validaIdade();
	}

	public function index(){
		
		$dados['title'] = "Bem Vindo";
		$this->inicio($dados,1,1);
		$this->load->view('home/home');
		$this->load->view('home/final');
		$this->load->view('template/footer');
	}
}
?>