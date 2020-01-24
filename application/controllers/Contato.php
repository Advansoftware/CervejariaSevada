<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Contato extends Geral
{
	public function __construct()
	{
		parent::__construct();
		$this->validaIdade();
	}

	public function index($page = 1, $noticia_id = 0)
	{
		$dados['title'] = "Contato";
		$this->inicio($dados);
		$this->load->view('contato/contato');
		$this->load->view('home/final');
		$this->load->view('template/footer');

	}

}
?>
