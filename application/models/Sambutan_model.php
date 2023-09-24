<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutan_model extends CI_Model{
  //Load Database
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  //Listing Galeri
  public function listing()
  {
    $this->db->select('*');
    $this->db->from('sambutan');
    $query = $this->db->get();
    return $query->row();
  }
}
 ?>
