<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplikasi extends CI_Controller {
	function __construct(){
	   parent::__construct();
     $this->load->helper('string');
     $this->load->helper('APIcondition');
  }
// ROUTE FUNCTION START HERE
  public function index(){
    $data['title'] = 'Aplikasi HRD dengan Gamification untuk Teknisi | Zoomin';
    $data['meta_description'] = 'Zoomin menyediakan aplikasi HRD untuk teknisi yang memiliki fitur gamification di dalamnya, sehingga pekerjaan teknisi menjadi lebih mudah dan menyenangkan';
    $data['meta_keywords'] = 'aplikasi hrd';
      $this->output->cache(5);
      $this->load->view('layout/v_header', $data);
      $this->load->view('pages/aplikasi/v_home');
      $this->load->view('layout/v_footer');
  }

  public function delete_file_cache()
	{
		$this->output->delete_cache();
	}
  
}
