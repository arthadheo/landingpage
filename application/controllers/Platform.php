<?php

/**
 * 
 */
class Platform extends CI_Controller
{
	
	public function index()
	{
	$data['title'] = 'Platform Gamification untuk Aplikasi HRIS Anda | Zoomin';
	$data['meta_description'] = 'Platform gamification Zoomin akan memperkaya aplikasi HRIS yang Anda miliki. Terdapat berbagai macam elemen gamification yang bisa Anda gunakan';
	$data['meta_keywords'] = 'aplikasi hris';
	$this->load->view('layout/v_header', $data);
    $this->load->view('pages/platform/platform.php');
	$this->load->view('layout/v_footer');
	}

}