<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Single extends CI_Controller
{

  //Load Model
  public function __construct()
  {
    parent::__construct();
    // $this->load->model('berita_model');
    // $this->load->model('galeri_model');
    // $this->load->model('program_model');
    // $this->load->model('user_model');
    // $this->load->model('konfigurasi_model');
    $this->load->model('single_model');
  }

  public function index()
  {
    $dataSingleAll = $this->single_model->all();
    $slug = $this->uri->segment(3);
    // $berita 	= $this->berita_model->listing();
    // $galeri 	= $this->galeri_model->listing();
    // $user 		= $this->user_model->listing();
    // $program 	= $this->program_model->listing();
    $tampilSingle = $this->single_model->singlepage($slug);

    $data = array(
      'dataSingle'		=> $tampilSingle,
      'dataSingleAll' => $dataSingleAll,
      'judul' => $tampilSingle->nama_master,
      'sub_judul' => $tampilSingle->nama_sub,
      'breadcrumb' => $tampilSingle->nama_master,
      'sub_breadcrumb' => $tampilSingle->nama_sub,
      'isi'    => 'admin/single_page/list',
      'activator' => $tampilSingle->slug_master,
      'sub_activator' => $tampilSingle->nama_slug
    );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function simpan()
  {
    $i = $this->input;
    $carisingle = $this->single_model->singlepage($i->post('slug'));
    if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']          = './assets/upload/image/';
      	$config['allowed_types']        = 'gif|jpg|png|jpeg';
				

				$this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        $upload_data	= array('uploads'	=> $this->upload->data());

        $config['image_library']  	= 'gd2';
        $config['source_image']   	= './assets/upload/image/' . $upload_data['uploads']['file_name'];
        //Gambar versi kecil dipindahkan
        $config['new_image']		= './assets/upload/image/thumbs/' . $upload_data['uploads']['file_name'];
        $config['create_thumb']   	= TRUE;
        $config['maintain_ratio'] 	= TRUE;
        $config['width']          	= 200;
        $config['height']         	= 200;
        $config['thumb_marker']		= '';

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        if ($carisingle->gambar != "") {
          unlink('./assets/upload/image/' . $carisingle->gambar);
          unlink('./assets/upload/image/thumbs/' . $carisingle->gambar);
        }
        $data = array(
          'id' => $i->post('id'),
          'konten' => $i->post('konten'),
          'judul' => $i->post('judul'),
          'gambar' => $upload_data['uploads']['file_name']
        );
        $this->single_model->simpan($data);
        $this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
        redirect(base_url('admin/single/'.$i->post('slug')), 'refresh');
    }else{
      $data = array(
        'id' => $i->post('id'),
        'konten' => $i->post('konten'),
        'judul' => $i->post('judul'),
      );
      $this->single_model->simpan($data);
        $this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
        redirect(base_url('admin/single/'.$i->post('slug')), 'refresh');
    }
  }

  public function ckeditor()
{
    $url = FCPATH.'admin/assets/ckfinder/userfiles/images'.time()."_".$_FILES['upload']['name'];

    $url_aux = substr($url, strlen(FCPATH) - 1);

    if (($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name'])) )
    {
       $message = "No file uploaded.";
    }
    else if(file_exists(FCPATH.'admin/assets/ckfinder/userfiles/images'.$_FILES['upload']['name']))
    {
        $message = "File already exists";
    }
    else if ($_FILES['upload']["size"] == 0)
    {
       $message = "The file is of zero length.";
    }
    else if (($_FILES['upload']["type"] != "image/pjpeg") AND ($_FILES['upload']["type"] != "image/jpeg") AND ($_FILES['upload']["type"] != "image/png"))
    {
       $message = "The image must be in either JPG or PNG format. Please upload a JPG or PNG instead.";
    }
    else if (!is_uploaded_file($_FILES['upload']["tmp_name"]))
    {
       $message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
    }
    else 
    {
       $message = "Image uploaded correctly";

       move_uploaded_file($_FILES['upload']['tmp_name'], $url);
    }


    $funcNum = $_GET['CKEditorFuncNum'] ;
    $url = $url_aux;
    echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";

}
}

/* End of file Single.php */
/* Location: ./application/controllers/admin/Single.php */