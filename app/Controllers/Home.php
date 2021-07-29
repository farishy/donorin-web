<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\AgendaModel;
use App\Models\FaqModel;

class Home extends BaseController
{
	protected $artikelModel;
	protected $agendaModel;
	protected $faqModel;
	public function __construct()
	{
		$this->artikelModel = new ArtikelModel();
		$this->agendaModel = new AgendaModel();
		$this->faqModel = new FaqModel();
	}
	public function index()
	{
		$artikel = $this->artikelModel->findAll();
		$eventagenda = $this->agendaModel->findAll();
		$frequencyaskquestion = $this->faqModel->findAll();

		$data = [
			'artikel' => $artikel,
			'eventagenda' => $eventagenda,
			'frequencyaskquestion' => $frequencyaskquestion
		];

		echo view('user/layouts/header');
		echo view('user/index', $data);
		echo view('user/layouts/footer');
	}

	public function detail($id)
	{
		
		$data = [
			'artikel' => $this->artikelModel->getArtikel($id)
		];
		echo view('user/layouts/header');
		echo view('user/post', $data);
		echo view('user/layouts/footer');
	}

	public function detailPostMobile($id)
	{
		
		$data = [
			'artikel' => $this->artikelModel->getArtikel($id)
		];
		echo view('user/post_hp', $data);
	}

	

	public function post()
	{
		echo view('user/layouts/header');
		echo view('user/post');
		echo view('user/layouts/footer');
	}

	public function blog()
	{
		echo view('user/layouts/header');
		echo view('user/blog');
		echo view('user/layouts/footer');
	}

	public function faq()
	{
		echo view('user/layouts/header');
		echo view('user/faq');
		echo view('user/layouts/footer');
	}
	public function login()
	{
		echo view('user/layouts/header');
		echo view('user/login');
		echo view('user/layouts/footer');
	}
}
