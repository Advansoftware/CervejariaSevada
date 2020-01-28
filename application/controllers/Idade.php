<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Idade extends Geral {
	public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data['title'] = "Bem Vindo";
			$this->load->view('idade');
		}
		public function pegaidade(){
			$pega = $this->input->post('getsIdade');
			$this->session->set_userdata('idade', $pega);
		}
	}
?>
