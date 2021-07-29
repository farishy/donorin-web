<?php

namespace App\Controllers;

use App\Models\PenulisModel;
use App\Models\LokasiModel;
use App\Models\GoldarModel;
use App\Models\AgendaModel;
use App\Models\ArtikelModel;
use App\Models\FaqModel;
use App\Models\AkundonorModel;
use App\Models\StokdarahModel;
use App\Models\TransaksidonorModel;

class Dashboard extends BaseController
{
	protected $penulisModel;
	protected $lokasiModel;
	protected $goldarModel;
	protected $agendaModel;
	protected $artikelModel;
	protected $faqModel;
	protected $akundonorModel;
	protected $stokdarahModel;
	protected $transaksidonorModel;
	public function __construct()
	{
		$this->penulisModel = new PenulisModel();
		$this->lokasiModel = new LokasiModel();
		$this->goldarModel = new GoldarModel();
		$this->agendaModel = new AgendaModel();
		$this->artikelModel = new ArtikelModel();
		$this->faqModel = new FaqModel();
		$this->akundonorModel = new AkundonorModel();
		$this->stokdarahModel = new StokdarahModel();
		$this->transaksidonorModel = new TransaksidonorModel();
	}
	// public function login()
	// {
	// 	echo view('auth/login');
	// }
	// public function register()
	// {
	// 	echo view('auth/register');
	// }
	public function index()
	{
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/index');
		echo view('admin/layouts/footer');
	}
	public function penulisTable()
	{
		$penulis = $this->penulisModel->findAll();

		$data = [
			'tittle' => 'Daftar Penulis',
			'penulis' => $penulis
		]; 

		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/penulisTable', $data);
		echo view('admin/layouts/footer');
	}
	public function lokasiTable()
	{
		$lokasi = $this->lokasiModel->findAll();

		$data = [
			'title' => 'Daftar Lokasi',
			'lokasi' => $lokasi
		];

		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/lokasiTable', $data);
		echo view('admin/layouts/footer');
	}
	public function goldarTable()
	{
		$golongandarah = $this->goldarModel->findAll();

		$data = [
			'title' => 'Daftar Golongan Darah',
			'golongandarah' => $golongandarah
		];

		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/goldarTable', $data);
		echo view('admin/layouts/footer');
	}
	public function agendaTable()
	{
		$eventagenda = $this->agendaModel->findAll();

		$data = [
			'title' => 'Daftar Event dan Agenda',
			'eventagenda' => $eventagenda
		];

		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/agendaTable', $data);
		echo view('admin/layouts/footer');
	}
	public function artikelTable()
	{
		$artikel = $this->artikelModel->findAll();

		$data = [
			'title' => 'Daftar Artikel',
			'artikel' => $artikel
		];

		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/artikelTable', $data);
		echo view('admin/layouts/footer');
	}
	public function faqTable()
	{
		$frequencyaskquestion = $this->faqModel->findAll();

		$data = [
			'title' => 'Daftar FAQ',
			'frequencyaskquestion' => $frequencyaskquestion
		];

		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/faqTable', $data);
		echo view('admin/layouts/footer');
	}
	public function akundonorTable()
	{
		$akundonor = $this->akundonorModel->findAll();

		$data = [
			'title' => 'Daftar Akun donor',
			'akundonor' => $akundonor
		];

		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/akundonorTable', $data);
		echo view('admin/layouts/footer');
	}
	public function stokdarahTable()
	{
		$stokdarah = $this->stokdarahModel->findAll();

		$data = [
			'tittle' => 'Daftar Stok Darah',
			'stokdarah' => $stokdarah
		]; 

		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/stokdarahTable', $data);
		echo view('admin/layouts/footer');
	}
	public function penulisform()
	{
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/penulisForm');
		echo view('admin/layouts/footer');
	}
	public function createpenulis(){
		// var_dump($this->request->getVar());
		$fileGambar = $this->request->getFile('gambarPenulis');
		$namaGambar = $fileGambar->getRandomName();
		$fileGambar->move('file_uploaded/gambarPenulis', $namaGambar);
		$new_location = base_url().'/file_uploaded/gambarPenulis/'.$namaGambar;
		$this->penulisModel->save([
			'namaPenulis' => $this->request->getVar('namaPenulis'),
			'gambarPenulis' => $new_location,
			'deskripsiPenulis' => $this->request->getVar('deskripsiPenulis'),
			'statusPenulis' => $this->request->getVar('statusPenulis'),
		]);
		session()->setFlashdata('message', 'Penulis berhasil ditambahkan.');
		return redirect()->to('/dashboard/penulisTable');
	}
	public function editpenulis($id){
		$penulis = $this->penulisModel->where('idPenulis', $id)->findAll();
		$data = [
			'penulis' => $penulis,
		];
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/editPenulis', $data);
		echo view('admin/layouts/footer');
	}
	public function updtpenulis($id){
		
		if(!file_exists($_FILES['gambarPenulis']['tmp_name']) || !is_uploaded_file($_FILES['gambarPenulis']['tmp_name'])){
			$this->penulisModel->save([
				'idPenulis' => $id,
				'namaPenulis' => $this->request->getVar('namaPenulis'),
				'deskripsiPenulis' => $this->request->getVar('deskripsiPenulis'),
				'statusPenulis' => $this->request->getVar('statusPenulis'),
			]);
		}else{
			$fileGambar = $this->request->getFile('gambarPenulis');
			$namaGambar = $fileGambar->getRandomName();
			$fileGambar->move('file_uploaded/gambarPenulis', $namaGambar);
			$new_location = base_url().'/file_uploaded/gambarPenulis/'.$namaGambar;
			$this->penulisModel->save([
				'idPenulis' => $id,
				'namaPenulis' => $this->request->getVar('namaPenulis'),
				'gambarPenulis' => $new_location,
				'deskripsiPenulis' => $this->request->getVar('deskripsiPenulis'),
				'statusPenulis' => $this->request->getVar('statusPenulis'),
			]);
		}
		session()->setFlashdata('message', 'Data berhasil diupdate!.');
		return redirect()->to('/dashboard/penulisTable');
	}
	public function dltpenulis($id){
		$this->penulisModel->delete($id);
		session()->setFlashdata('message', 'Data penulis berhasil dihapus.');
		return redirect()->to('/dashboard/penulisTable');
	}
	public function artikelform()
	
	{
		$penulis = $this->penulisModel->findAll();
		$data = [
			'penulis' => $penulis,
		];
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/artikelForm', $data);
		echo view('admin/layouts/footer');
	}
	public function createartikel(){
		
		$fileGambar = $this->request->getFile('gambarArtikel');
		$namaGambar = $fileGambar->getRandomName();
		$fileGambar->move('file_uploaded/gambarArtikel', $namaGambar);
		var_dump($fileGambar);
		$new_location = base_url().'/file_uploaded/gambarArtikel/'.$namaGambar;
		$this->artikelModel->save([
			'idPenulis' => $this->request->getVar('penulis'),
			'judulArtikel' => $this->request->getVar('judulArtikel'),
			'sinopsisArtikel' => $this->request->getVar('sinopsisArtikel'),
			'kontenArtikel' => $this->request->getVar('kontenArtikel'),
			'gambarArtikel' => $new_location,
			'tglRilis' => $this->request->getVar('tglRilis'),
			'tipeArtikel' => $this->request->getVar('tipeArtikel'),
			'statusArtikel' => $this->request->getVar('statusArtikel'),
			'viewCount' => 0,
			'likeCount' => 0,
			'commentCount' => 0,
		]);
		session()->setFlashdata('message', 'Artikel berhasil ditambahkan.');
		return redirect()->to('/dashboard/artikelTable');
	}
	public function editartikel($id)
	{
		$artikel = $this->artikelModel->where('idArtikel', $id)->findAll();
		$penulis = $this->penulisModel->where('idPenulis', $id)->findAll();
		$data = [
			'artikel' => $artikel,
			'penulis' => $penulis,
		];
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/editArtikel', $data);
		echo view('admin/layouts/footer');
	}
	public function updtartikel($id){
		
		if(!file_exists($_FILES['gambarArtikel']['tmp_name']) || !is_uploaded_file($_FILES['gambarArtikel']['tmp_name'])){
			$this->artikelModel->save([
				'idPenulis' => $this->request->getVar('penulis'),
				'judulArtikel' => $this->request->getVar('judulArtikel'),
				'sinopsisArtikel' => $this->request->getVar('sinopsisArtikel'),
				'kontenArtikel' => $this->request->getVar('kontenArtikel'),
				'tglRilis' => $this->request->getVar('tglRilis'),
				'tipeArtikel' => $this->request->getVar('tipeArtikel'),
				'statusArtikel' => $this->request->getVar('statusArtikel'),
			]);
		}else{
			$fileGambar = $this->request->getFile('gambarArtikel');
			$namaGambar = $fileGambar->getRandomName();
			$fileGambar->move('file_uploaded/gambarArtikel', $namaGambar);
			$new_location = base_url().'/file_uploaded/gambarArtikel/'.$namaGambar;
			$this->artikelModel->save([
				'idPenulis' => $this->request->getVar('penulis'),
				'judulArtikel' => $this->request->getVar('judulArtikel'),
				'sinopsisArtikel' => $this->request->getVar('sinopsisArtikel'),
				'kontenArtikel' => $this->request->getVar('kontenArtikel'),
				'gambarArtikel' => $new_location,
				'tglRilis' => $this->request->getVar('tglRilis'),
				'tipeArtikel' => $this->request->getVar('tipeArtikel'),
				'statusArtikel' => $this->request->getVar('statusArtikel'),
			]);
		}
		session()->setFlashdata('message', 'Data berhasil diupdate!.');
		return redirect()->to('/dashboard/artikelTable');
	}
	public function dltartikel($id){
		$this->artikelModel->delete($id);
		session()->setFlashdata('message', 'Data artikel berhasil dihapus.');
		return redirect()->to('/dashboard/artikelTable');
	}
	public function lokasiform()
	{
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/lokasiForm');
		echo view('admin/layouts/footer');
	}
	public function createlokasi(){
		$this->lokasiModel->save([
			'namaLokasi' => $this->request->getVar('namaLokasi'),
			'latKordinat' => $this->request->getVar('latKordinat'),
			'longKordinat' => $this->request->getVar('longKordinat'),
		]);
		session()->setFlashdata('message', 'Lokasi berhasil ditambahkan.');
		return redirect()->to('/dashboard/lokasiTable');
	}
	public function editlokasi($id){
		$lokasi = $this->lokasiModel->where('idLokasi', $id)->findAll();
		$data = [
			'lokasi' => $lokasi,
		];
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/editLokasi', $data);
		echo view('admin/layouts/footer');
	}
	public function updtlokasi($id){
		$this->lokasiModel->save([
			'idLokasi' => $id,
			'namaLokasi' => $this->request->getVar('namaLokasi'),
			'latKordinat' => $this->request->getVar('latKordinat'),
			'longKordinat' => $this->request->getVar('longKordinat'),
		]);
		session()->setFlashdata('message', 'Data berhasil diupdate!.');
		return redirect()->to('/dashboard/lokasiTable');
	}
	public function dltlokasi($id){
		$this->lokasiModel->delete($id);
		session()->setFlashdata('message', 'Data lokasi berhasil dihapus.');
		return redirect()->to('/dashboard/lokasiTable');
	}
	public function agendaform()
	{
		$lokasi = $this->lokasiModel->findAll();
		$data = [
			'lokasi' => $lokasi,
		];
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/agendaForm', $data);
		echo view('admin/layouts/footer');
	}
	public function createagenda()
	{
		$fileGambar = $this->request->getFile('gambarAgenda');
		$namaGambar = $fileGambar->getRandomName();
		$fileGambar->move('file_uploaded/gambarAgenda', $namaGambar);
		var_dump($fileGambar);
		$new_location = base_url().'/file_uploaded/gambarAgenda/'.$namaGambar;
		$this->agendaModel->save([
			'idLokasi' => $this->request->getVar('lokasi'),
			'judulAgenda' => $this->request->getVar('judulAgenda'),
			'sinopsisAgenda' => $this->request->getVar('sinopsisAgenda'),
			'kontenAgenda' => $this->request->getVar('kontenAgenda'),
			'gambarAgenda' => $new_location,
			'tglAgenda' => $this->request->getVar('tglAgenda'),
			'statusAgenda' => $this->request->getVar('statusAgenda'),
		]);
		session()->setFlashdata('message', 'Agenda berhasil ditambahkan.');
		return redirect()->to('/dashboard/agendaTable');
	}
	public function editagenda($id)
	{
		$eventagenda = $this->agendaModel->where('idAgenda', $id)->findAll();
		$lokasi = $this->lokasiModel->where('idLokasi', $id)->findAll();
		$data = [
			'eventagenda' => $eventagenda,
			'lokasi' => $lokasi,
		];
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/editAgenda', $data);
		echo view('admin/layouts/footer');
	}
	public function updtagenda($id){
		
		if(!file_exists($_FILES['gambarAgenda']['tmp_name']) || !is_uploaded_file($_FILES['gambarAgenda']['tmp_name'])){
			$this->agendaModel->save([
				'idAgenda' => $id,
				'judulAgenda' => $this->request->getVar('judulAgenda'),
				'sinopsisAgenda' => $this->request->getVar('sinopsisAgenda'),
				'kontenAgenda' => $this->request->getVar('kontenAgenda'),
				'tglAgenda' => $this->request->getVar('tglAgenda'),
				'statusAgenda' => $this->request->getVar('statusAgenda'),
			]);
		}else{
			$fileGambar = $this->request->getFile('gambarAgenda');
			$namaGambar = $fileGambar->getRandomName();
			$fileGambar->move('file_uploaded/gambarAgenda', $namaGambar);
			$new_location = base_url().'/file_uploaded/gambarAgenda/'.$namaGambar;
			$this->agendaModel->save([
				'idAgenda' => $id,
				'judulAgenda' => $this->request->getVar('judulAgenda'),
				'sinopsisAgenda' => $this->request->getVar('sinopsisAgenda'),
				'kontenAgenda' => $this->request->getVar('kontenAgenda'),
				'gambarAgenda' => $new_location,
				'tglAgenda' => $this->request->getVar('tglAgenda'),
				'statusAgenda' => $this->request->getVar('statusAgenda'),
			]);
		}
		session()->setFlashdata('message', 'Data berhasil diupdate!.');
		return redirect()->to('/dashboard/agendaTable');
	}
	public function dltagenda($id)
	{
		$this->agendaModel->delete($id);
		session()->setFlashdata('message', 'Data agenda berhasil dihapus.');
		return redirect()->to('/dashboard/agendaTable');
	}
	public function faqform()
	{
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/faqForm');
		echo view('admin/layouts/footer');
	}
	public function createfaq(){
		// var_dump($this->request->getVar());
		$fileGambar = $this->request->getFile('icon');
		$namaGambar = $fileGambar->getRandomName();
		$fileGambar->move('file_uploaded/icon', $namaGambar);
		$new_location = base_url().'/file_uploaded/icon/'.$namaGambar;
		$this->faqModel->save([
			'judulFaq' => $this->request->getVar('judulFaq'),
			'icon' => $new_location,
			'sinopsisFaq' => $this->request->getVar('sinopsisFaq'),
			'kontenFaq' => $this->request->getVar('kontenFaq'),
		]);
		session()->setFlashdata('message', 'FAQ berhasil ditambahkan.');
		return redirect()->to('/dashboard/faqTable');
	}
	public function editfaq($id){
		$frequencyaskquestion = $this->faqModel->where('idFaq', $id)->findAll();
		$data = [
			'frequencyaskquestion' => $frequencyaskquestion,
		];
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/editFaq', $data);
		echo view('admin/layouts/footer');
	}
	public function updtfaq($id){
		
		if(!file_exists($_FILES['icon']['tmp_name']) || !is_uploaded_file($_FILES['icon']['tmp_name'])){
			$this->faqModel->save([
				'idFaq' => $id,
				'judulFaq' => $this->request->getVar('judulFaq'),
				'sinopsisFaq' => $this->request->getVar('sinopsisFaq'),
				'kontenFaq' => $this->request->getVar('kontenFaq'),
			]);
		}else{
			$fileGambar = $this->request->getFile('icon');
			$namaGambar = $fileGambar->getRandomName();
			$fileGambar->move('file_uploaded/icon', $namaGambar);
			$new_location = base_url().'/file_uploaded/icon/'.$namaGambar;
			$this->faqModel->save([
				'idFaq' => $id,
				'judulFaq' => $this->request->getVar('judulFaq'),
				'icon' => $new_location,
				'sinopsisFaq' => $this->request->getVar('sinopsisFaq'),
				'kontenFaq' => $this->request->getVar('kontenFaq'),
			]);
		}
		session()->setFlashdata('message', 'Data berhasil diupdate!.');
		return redirect()->to('/dashboard/faqTable');
	}
	public function dltfaq($id){
		$this->faqModel->delete($id);
		session()->setFlashdata('message', 'Data FAQ berhasil dihapus.');
		return redirect()->to('/dashboard/faqTable');
	}

	public function transaksiTable()
	{
		$transaksidonor = $this->transaksidonorModel->findAll();

		$data = [
			'tittle' => 'Daftar Transaksi',
			'transaksidonor' => $transaksidonor
		]; 

		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/transaksiTable', $data);
		echo view('admin/layouts/footer');
	}

	public function edittransaksi($id){
		$transaksidonor = $this->transaksidonorModel->where('idTransaksi', $id)->findAll();
		$data = [
			'transaksidonor' => $transaksidonor,
		];
		echo view('admin/layouts/header');
    	echo view('admin/layouts/sidebar');
		echo view('admin/editTransaksi', $data);
		echo view('admin/layouts/footer');
	}
	public function updttransaksi($id){
		$this->transaksidonorModel->save([
			'idTransaksi' => $id,
			'idAkun' => $this->request->getVar('idAkun'),
			'tglTransaksi' => $this->request->getVar('tglTransaksi'),
			'statusTransaksi' => $this->request->getVar('statusTransaksi'),
			'keterangan' => $this->request->getVar('keterangan'),
		]);
		session()->setFlashdata('message', 'Data berhasil diupdate!.');
		return redirect()->to('/dashboard/transaksiTable');
	}
	public function dlttransaksi($id){
		$this->transaksidonorModel->delete($id);
		session()->setFlashdata('message', 'Data Transaksi Donor berhasil dihapus.');
		return redirect()->to('/dashboard/transaksiTable');
	}

}
