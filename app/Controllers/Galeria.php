<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Galeria extends Geral {
	public function __construct()
		{
			parent::__construct();
			$this->validaIdade();
		}

		public function index()
		{
			$data['title'] = "Galeria";
			$this->inicio($data,0);
			$this->load->view('galeria');
			$this->load->view('template/footer');
		}
}
?>
