<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kependudukan_model extends CI_Model {

	//Load Database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing Pegawai
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('penduduk');
		$this->db->order_by('id');
		$query = $this->db->get();
		return $query->result();
	}

	//Detail Pegawai
	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('penduduk');
		$this->db->where('id',$id);
		$this->db->order_by('id');
		$query = $this->db->get();
		return $query->row();
	}

	//Tambah Pegawai
	public function tambah($data)
	{
		$this->db->insert('penduduk', $data);
	}

	//Edit Pegawai
	public function edit($data)
	{
		$this->db->where('id',$data['id']);
		$this->db->update('penduduk',$data);
	}

	//Delete Pegawai

	public function delete($data)
	{
		$this->db->where('id',$data['id']);
		$this->db->delete('penduduk',$data);
	}
}

/* End of file Pegawai_model.php */
/* Location: ./application/models/Pegawai_model.php */
