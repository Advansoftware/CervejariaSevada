<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Visitacao extends Geral {
	public function __construct()
		{
			parent::__construct();
			$this->validaIdade();
		}
	public function index(){
		$dados['title'] = "Visistação";
		$this->inicio($dados);
		$this->load->view('visitacao/visitacao');
		$this->load->view('template/footer');
		
	}
	public function whatsapp(){
	date_default_timezone_set('America/Sao_Paulo');
	$hr = date("H");
	if($hr >= 12 && $hr<18) {
	$resp = "Boa tarde!";}
	else if ($hr >= 5 && $hr <12 ){
	$resp = "Bom dia!";}
	else {
	$resp = "Boa noite!";}
	$nome = $this->input->post('nome');
	$entidade = $this->input->post('entidade');
	$data = $this->input->post('data');
	$data_br = date("d/m/Y", strtotime($data));
	$ob = $this->input->post('ob');

	 $texto =  $resp." Meu nome é *".$nome."*, Eu gostaria de agendar uma visita na *".$entidade."* para o dia *".$data_br."*, Tem alguma hora disponivel para esse dia? Se não estiver, tem algum outro dia que posso agendar uma visita? *Obeservação:* ".$ob.""; 
	echo $texto;
	}


}