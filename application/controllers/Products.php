<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct(){
	   parent::__construct();
     $this->load->helper('string');
     $this->load->helper('APIcondition');
  }
// ROUTE FUNCTION START HERE
  public function index(){
      $this->load->view('layout/v_header');
      $this->load->view('pages/products/v_home');
      $this->load->view('layout/v_footer');
  }
  
}