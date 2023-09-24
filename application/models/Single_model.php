<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	Public function singlepage($slug)
	{
		$this->db->select('data_page.*, master_page.*');
		$this->db->from('data_page');
		$this->db->join('master_page','master_page.id_master = data_page.id_master','LEFT');
		$this->db->where('nama_slug',$slug);
		$query = $this->db->get();
		return $query->row();
	}

	public function all()
	{
		$this->db->select('nama_slug');
		$this->db->from('data_page');
		$query = $this->db->get();
		return $query->row();
	}

	public function simpan($data)
	{
      $this->db->where('id', $data['id']);
      $this->db->update('data_page', $data);
	}

	public function profilhome()
	{
		$this->db->select('*');
		$this->db->from('data_page');
		$this->db->where('id_master',1);
		$query = $this->db->get();
		return $query->result();
	}

	public function ppdbhome()
	{
		$this->db->select('*');
		$this->db->from('data_page');
		$this->db->where('id_master',3);
		$query = $this->db->get();
		return $query->row();
	}

	public function unithome()
	{
		$this->db->select('*');
		$this->db->from('data_page');
		$this->db->where('id_master',2);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Single_model.php */
/* Location: ./application/models/Single_model.php */
