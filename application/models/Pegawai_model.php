<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

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
		$this->db->from('pegawai');
		$this->db->order_by('id_pegawai');
		$query = $this->db->get();
		return $query->result();
	}

	//Detail Pegawai
	public function detail($id_pegawai)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('id_pegawai',$id_pegawai);
		$this->db->order_by('id_pegawai');
		$query = $this->db->get();
		return $query->row();
	}

	//Tambah Pegawai
	public function tambah($data)
	{
		$this->db->insert('pegawai', $data);
	}

	//Edit Pegawai
	public function edit($data)
	{
		$this->db->where('id_pegawai',$data['id_pegawai']);
		$this->db->update('pegawai',$data);
	}

	//Delete Pegawai

	public function delete($data)
	{
		$this->db->where('id_pegawai',$data['id_pegawai']);
		$this->db->delete('pegawai',$data);
	}
}

/* End of file Pegawai_model.php */
/* Location: ./application/models/Pegawai_model.php */
