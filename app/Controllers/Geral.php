<?php namespace App\Controllers;
	class Geral extends BaseController
	{

	
		protected $data;

		public function carrega()
		{
			define("ITENS_POR_PAGINA", 20);
			helper('url_helper');
			helper('url');
			helper('html');
			helper('form');
			library('session');
			library('email');
			helper('cookie');
			$this->data['url'] = base_url();
			$this->data['paginacao']['url'] = base_url();
			$this->data['paginacao']['itens_por_pagina'] = ITENS_POR_PAGINA;
			email_server();
		}
		public function email_server(){
			$config['protocol'] = 'SMTP';
			$config['smtp_crypto'] = 'ssl';
			$config['smtp_host'] = 'mail.cervejariasevda.com.br';
			$config['smtp_port'] = '465';
			$config['mailtype'] = 'html';
			$config['smtp_user'] = "contato@cervejariasevda.com.br";
			$config['smtp_pass'] = "Sevd@278663";
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$this->email->initialize($config);
		}
		
		public function validaIdade(){
			$getIdade = $this->session->userdata('idade');
			if($getIdade<18 || empty($getIdade)){
				redirect("idade/");
			}
		}
	}
?>
