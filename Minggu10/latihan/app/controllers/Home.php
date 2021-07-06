<?php

class Home extends Controller {
	public function index()
	{
		$data['nama'] = $this->model('User_model')->getUser();
		$data['title'] = 'Halaman Home';
		$data['skl'] = $this->model('Sekolah_model')->getAllSekolah();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}