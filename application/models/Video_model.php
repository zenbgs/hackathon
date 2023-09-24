<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model {

	//Load Database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing Kategori
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('video');
		$this->db->order_by('id_video','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	//Tambah
	public function tambah($data)
	{
		$this->db->insert('video', $data);
	}

	//Edit
	public function edit($data)
	{
		$this->db->where('id_video',$data['id_video']);
		$this->db->update('video',$data);
	}

	//Delete Kategori

	public function delete($data)
	{
		$this->db->where('id_video',$data['id_video']);
		$this->db->delete('video',$data);
	}
}

/* End of file Video_model.php */
/* Location: ./application/models/Video_model.php */