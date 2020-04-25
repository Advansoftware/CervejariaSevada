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
	public function envia_email(){
			

			$data['nome'] = $this->input->post('nome');
			$data['email'] = $this->input->post('email');
			$data['assunto'] = $this->input->post('assunto');
			$data['mensagem'] = $this->input->post('ob');
		

			$this->email->from('contato@cervejariasevda.com.br', 'Contato: Cervejaria Sevda');
			$this->email->to('brunoantunes94@hotmail.com');
			$this->email->subject('Contato Sevda:'.$data['assunto']);
			$this->email->message($this->load->view('contato/email',$data, TRUE));
			
			if($this->email->send()) echo "Email Enviado com Sucesso";
			else echo "Erro ao enviar email: ".$this->email->print_debugger();
	}
}
?>
