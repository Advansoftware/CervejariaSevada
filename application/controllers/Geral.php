<?php
	class Geral extends CI_Controller 
	{
		protected $data;

		public function __construct()
		{
			parent::__construct();
			define("ITENS_POR_PAGINA", 20);
			$this->load->helper('url_helper');
			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->library('email');
			$this->load->helper('cookie');
			$this->data['url'] = base_url();
			$this->data['paginacao']['url'] = base_url();
			$this->data['paginacao']['itens_por_pagina'] = ITENS_POR_PAGINA;
			$this->email_server();
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
		public function inicio($dados=null,$slide=null, $social=null)
		{
			$dados['paginacao']['url'] = base_url();
			$dados['paginacao']['itens_por_pagina'] = ITENS_POR_PAGINA;

			$this->load->view('template/head', $dados);
			$this->load->view('template/menu');
			if($slide==1){
				$this->load->view('template/slide');
			}
			if($social == 1){
				$this->load->view('template/social');
			}

		}
		public function validaIdade(){
			$getIdade = $this->session->userdata('idade');
			if($getIdade<18 || empty($getIdade)){
				redirect("idade/");
			}
		}
	}
?>
