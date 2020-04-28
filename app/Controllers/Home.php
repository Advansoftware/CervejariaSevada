<?php namespace App\Controllers;

class Home extends BaseController
{
	//email_server();
	public function index()
	{
		helper('url_helper');
		helper('url');
		helper('html');
		helper('form');
		//library('session');
		//library('email');
		helper('cookie');
		$dados['title'] = "Bem Vindo";
		echo view('template/head',$dados);
		echo view('template/menu');
		echo view('template/slide');
		echo view('template/social');
		echo view('home/home');
		echo view('home/final');
		echo view('template/footer');
	}

	//--------------------------------------------------------------------

}
