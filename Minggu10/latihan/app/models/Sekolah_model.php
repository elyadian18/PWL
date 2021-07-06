<?php

class Sekolah_model{
	
	private $table = 'sekolah_terdekat';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllSekolah()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAllSekolahById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahSekolah($data)
	{
		//$nim, $nama, $jurusan
		$query = "INSERT INTO sekolah_terdekat (nama, alamat) VALUES(:nama, :alamat)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataSekolah($id,$nama,$alamat)
	{
		$query = "UPDATE sekolah_terdekat SET nama=:nama, alamat=:alamat WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$id);
		$this->db->bind('nama',$nama);
		$this->db->bind('alamat',$alamat);
		$this->db->execute();
		return true;
	}

	public function deleteSekolah($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}