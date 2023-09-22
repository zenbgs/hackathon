<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_model extends CI_Model {

	//Load Database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing Program
	public function listing()
	{
		$this->db->select(	'program.*,
							user.nama');
		$this->db->from('program');
		//join
		$this->db->join('user','user.id_user = program.id_user','LEFT');
		//End join
		$this->db->order_by('id_program','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	//home Program
	public function home()
	{
		$this->db->select(	'program.*,
							user.nama');
		$this->db->from('program');
		//join
		$this->db->join('user','user.id_user = program.id_user','LEFT');
		//End join
		//where
		$this->db->where('program.status_program','Publish');
		//End where
		$this->db->order_by('id_program','ASC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}

	// Program
	public function program($limit,$start)
	{
		$this->db->select(	'program.*,
							user.nama');
		$this->db->from('program');
		//join
		$this->db->join('user','user.id_user = program.id_user','LEFT');
		//End join
		//where
		$this->db->where('program.status_program','Publish');
		//End where
		$this->db->order_by('id_program','ASC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	//Total Program
	public function total()
	{
		$this->db->select(	'program.*,
							user.nama');
		$this->db->from('program');
		//join
		$this->db->join('user','user.id_user = program.id_user','LEFT');
		//End join
		//where
		$this->db->where('program.status_program','Publish');
		//End where
		$this->db->order_by('id_program','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	//Read Program
	public function read($slug_program)
	{
		$this->db->select(	'program.*,
							user.nama');
		$this->db->from('program');
		//join
		$this->db->join('user','user.id_user = program.id_user','LEFT');
		//End join
		//where
		$this->db->where(array(	'program.status_program' 	=>	'Publish',
								'program.slug_program'		=>	$slug_program));
		//End where
		$this->db->order_by('id_program','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	//Detail Program
	public function detail($id_program)
	{
		$this->db->select('*');
		$this->db->from('program');
		$this->db->where('id_program',$id_program);
		$this->db->order_by('id_program');
		$query = $this->db->get();
		return $query->row();
	}

	//Login Program
	public function login($programname, $password)
	{
		$this->db->select('*');
		$this->db->from('program');
		$this->db->where(array('programname'	=> $programname,
							   'password'	=> sha1($password)));
		$this->db->order_by('id_program');
		$query = $this->db->get();
		return $query->row();
	}

	//Tambah Program
	public function tambah($data)
	{
		$this->db->insert('program', $data);
	}

	//Edit Program
	public function edit($data)
	{
		$this->db->where('id_program',$data['id_program']);
		$this->db->update('program',$data);
	}

	//Delete Program

	public function delete($data)
	{
		$this->db->where('id_program',$data['id_program']);
		$this->db->delete('program',$data);
	}
}

/* End of file Program_model.php */
/* Location: ./application/models/Program_model.php */