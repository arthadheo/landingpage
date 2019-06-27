<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
	   parent::__construct();
     $this->load->helper('string');
     $this->load->helper('APIcondition');
  }
// ROUTE FUNCTION START HERE
  public function index(){
      $data['title'] = 'Zoomin | Solusi Gamification untuk Aplikasi Karyawan';
      $data['meta_description'] = 'Zoomin menyediakan solusi gamification untuk aplikasi karyawan, khususnya teknisi. Gamification dapat meningkatkan motivasi dan produktivitas kerja teknisi Anda';
      $data['meta_keywords'] = 'aplikasi karyawan';
      $this->load->view('layout/v_header', $data);
      $this->load->view('pages/home/v_home');
      $this->load->view('layout/v_footer');
  }
}
