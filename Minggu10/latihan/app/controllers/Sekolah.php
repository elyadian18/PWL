<?php

class Sekolah extends Controller {
	public function index(){
		$data['title'] = 'Data Sekolah';
		$data['skl'] = $this->model('Sekolah_model')->getAllSekolah();
		$this->view('templates/header', $data);
		$this->view('sekolah/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id){

		$data['title'] = 'Detail Sekolah';
		$data['skl'] = $this->model('Sekolah_model')->getAllSekolahById($id);
		$this->view('templates/header', $data);
		$this->view('sekolah/detail', $data);
		$this->view('templates/footer');
	}

	public function edit($id){

		$data['title'] = 'Detail Sekolah';
		$data['skl'] = $this->model('Sekolah_model')->getAllSekolahById($id);
		$this->view('templates/header', $data);
		$this->view('sekolah/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah(){
		$data['title'] = 'Tambah Sekolah';		
		$this->view('templates/header', $data);
		$this->view('sekolah/tambah');
		$this->view('templates/footer');
	}

	public function simpansekolah(){		

		if( $this->model('Sekolah_model')->tambahSekolah($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/sekolah');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. BASEURL . '/sekolah');
			exit;	
		}
	}

	public function updateSekolah(){		
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
		$data['skl'] = $this->model('Sekolah_model')->updateDataSekolah($id,$nama,$alamat);
		if( $data['skl'] ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/sekolah');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/sekolah');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('Sekolah_model')->deleteSekolah($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. BASEURL . '/sekolah');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. BASEURL . '/sekolah');
			exit;	
		}
	}

	public function getDataChange(){

		$id = $_POST['id'];

		echo json_encode($this->model('Sekolah_model')->getAllSekolahById($id));
	}
}