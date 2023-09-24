<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_desa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing
	Public function listing()
	{
		$query = $this->db->get('identitas_desa');
		return $query->row();
	}

	//Edit
	public function edit($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('identitas_desa', $data);
	}

	//Menu
	public function menu_berita()
	{
		$this->db->select(	'berita.*,
							kategori.nama_kategori,
							kategori.slug_kategori,
							user.nama');
		$this->db->from('berita');
		//Join
		$this->db->join('kategori','kategori.id_kategori = berita.id_kategori','LEFT');
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		//End Join
		$this->db->where(array(	'berita.status_berita'	=> 'Publish',
								'berita.jenis_berita'	=> 'Berita'));
		// $this->db->group_by('berita.id_kategori');
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	//Menu Program
	public function menu_program()
	{
		$this->db->select('program.*,
							user.nama');
		$this->db->from('program');
		//JOIN
		$this->db->join('user','user.id_user = program.id_user','LEFT');
		//END JOIN
		$this->db->where('program.status_program','Publish');
		$this->db->order_by('id_program','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	//Menu Profil
	public function menu_profil()
	{
		$this->db->select(	'berita.*,
							kategori.nama_kategori,
							kategori.slug_kategori,
							user.nama');
		$this->db->from('berita');
		//Join
		$this->db->join('kategori','kategori.id_kategori = berita.id_kategori','LEFT');
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		//End Join
		$this->db->where(array(	'berita.status_berita'	=> 'Publish',
								'berita.jenis_berita'	=> 'Profil'));
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	//view sambutan
	public function viewSambutan(){
		$this->db->select('*');
		$this->db->from('sambutan');
		$query = $this->db->get();
		return $query->row();
	}

	//simpan sambutan
	public function simpan($data)
	{
		$this->db->where('id',$data['id']);
		$this->db->update('identitas_desa',$data);
	}

	//Listing Link Terkait
	public function viewLink()
	{
		$this->db->select('*');
		$this->db->from('link_terkait');
		$this->db->order_by('id_link');
		$query = $this->db->get();
		return $query->result();
	}

	//Tambah Link Terkait
	public function tambahLinkTerkait($data)
	{
		$this->db->insert('link_terkait', $data);
	}

	//Detail Link Terkait
	public function detailLinkTerkait($id_link)
	{
		$this->db->select('*');
		$this->db->from('link_terkait');
		$this->db->where('id_link',$id_link);
		$this->db->order_by('id_link');
		$query = $this->db->get();
		return $query->row();
	}

	//Edit Link Terkait
	public function editLinkTerkait($data)
	{
		$this->db->where('id_link',$data['id_link']);
		$this->db->update('link_terkait',$data);
	}

	//Delete Link Terkait
	public function deleteLinkTerkait($data)
	{
		$this->db->where('id_link',$data['id_link']);
		$this->db->delete('link_terkait',$data);
	}

	//Listing Aplikasi Madrasah
	public function viewAplikasiMadrasah()
	{
		$this->db->select('*');
		$this->db->from('aplikasi_madrasah');
		$this->db->order_by('id_aplikasi');
		$query = $this->db->get();
		return $query->result();
	}

	//Tambah Aplikasi Madrasah
	public function tambahAplikasiMadrasah($data)
	{
		$this->db->insert('aplikasi_madrasah', $data);
	}

	//Detail Aplikasi Madrasah
	public function detailAplikasiMadrasah($id_aplikasi)
	{
		$this->db->select('*');
		$this->db->from('aplikasi_madrasah');
		$this->db->where('id_aplikasi',$id_aplikasi);
		$this->db->order_by('id_aplikasi');
		$query = $this->db->get();
		return $query->row();
	}

	//Edit Aplikasi Madrasah
	public function editAplikasiMadrasah($data)
	{
		$this->db->where('id_aplikasi',$data['id_aplikasi']);
		$this->db->update('aplikasi_madrasah',$data);
	}

	//Delete Aplikasi Madrasah
	public function deleteAplikasiMadrasah($data)
	{
		$this->db->where('id_aplikasi',$data['id_aplikasi']);
		$this->db->delete('aplikasi_madrasah',$data);
	}

}

/* End of file Konfigurasi_model.php */
/* Location: ./application/models/Konfigurasi_model.php */
