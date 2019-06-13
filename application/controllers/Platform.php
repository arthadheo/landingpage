<?php

/**
 * 
 */
class Platform extends CI_Controller
{
	
	public function index()
	{
	  $this->load->view('layout/v_header');
      $this->load->view('pages/platform/platform.php');
      $this->load->view('layout/v_footer');
	}
}