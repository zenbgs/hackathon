<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilman_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing
	Public function listing()
	{
		$query = $this->db->get('profil');
		return $query->row();
	}

	Public function listing_galeri($limit, $start)
	{
		$this->db->select(	'*');
		$this->db->from('galeri_profil');
		$this->db->order_by('id_galeri','DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	Public function total_galeri()
	{
		$query = $this->db->get('galeri_profil');
		return $query->result();
	}

	// Public function limit_galeri($limit, $start)
	// {
	// 	$query = $this->db->get('galeri_profil');
		
	// 	return $query->result();
	// }

	public function simpan($data)
	{
      $this->db->where('id_profil', $data['id_profil']);
      $this->db->update('profil', $data);
	}

	public function galeri_simpan($data)
	{
		$this->db->insert('galeri_profil', $data);
	}

	public function galeri_update($data)
	{
      $this->db->where('id_galeri', $data['id_galeri']);
      $this->db->update('galeri_profil', $data);
	}

	public function galeri_delete($data)
	{
		$this->db->where('id_galeri',$data['id_galeri']);
		$this->db->delete('galeri_profil',$data);
	}

	public function galeri_detail($id_galeri)
	{
		$this->db->select('*');
		$this->db->from('galeri_profil');
		$this->db->where('id_galeri',$id_galeri);
		$query = $this->db->get();
		return $query->row();
	}

	//view sambutan
	public function viewVisiMisi(){
    $query = $this->db->get('profil');
		return $query->row();
	}


}

/* End of file Konfigurasi_model.php */
/* Location: ./application/models/Konfigurasi_model.php */
