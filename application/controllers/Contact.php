<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct(){
	   parent::__construct();
     $this->load->helper('string');
     $this->load->helper('APIcondition');
     $this->load->model('contact_model', 'contacts');
  }
// ROUTE FUNCTION START HERE
  public function index(){
    $data['title'] = 'Solusi Gamification untuk HR Software Indonesia | Zoomin';
    $data['meta_description'] = 'Zoomin menyediakan solusi gamification untuk HR software Indonesia, khususnya untuk tenaga kerja teknisi. Anda tertarik? Hubungi kami untuk demo produk gratis';
    $data['meta_keywords'] = 'hr software indonesia';
      $this->load->view('layout/v_header', $data);
      $this->load->view('pages/contact/v_home');
      $this->load->view('layout/v_footer');
  }

  function send_wa(){
    // DEFINE FORM INPUT
    $name_input   = $this->input->post('nameContact');
    $institusi_input  = $this->input->post('institusiContact');
    $email_input    = $this->input->post('emailContact');

     /*Redirect the user to some site*/ 
     redirect('https://api.whatsapp.com/send?phone=6281322151415&text=Nama:%20'.$name_input.'%0AAsal%20Institusi:%20'.$institusi_input.'%0AEmail:%20'.$email_input.'');

  }

  function send_message(){
    // DEFINE FORM INPUT
    $name_input   = $this->input->post('nameContact');
    $institusi_input  = $this->input->post('institusiContact');
    $email_input    = $this->input->post('emailContact');
    $msg_input    = $this->input->post('msgContact');
    $time         = time();
    $date_msg     = date('Y-m-d H:i:s',$time);

    $data = array(
      'name_msg'    => $name_input,
      'email_msg'   => $email_input,
      'institusi_msg'   => $institusi_input,
      'msg'         => $msg_input,
      'date_msg'    => $date_msg,
    );  

    $feedback = $this->contacts->post($data);
    if ($feedback == false) {
      $this->session->set_flashdata('msg',
        '<div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Oh no!</strong> Sepertinya ada kesalahan dalam mengirim pesan, silahkan coba lagi.
        </div>');
      redirect('Contact');
    } else {
      $this->send_email($data);
      $this->session->set_flashdata('msg',
      '<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Yey !</strong> Pesan anda terkirim, tim kami akan segera mengabari anda.
      </div>');
      redirect('Contact');
    }
  }

  function send_email() {
    $nama     = $this->input->post('nameContact');
    $institusi= $this->input->post('institusiContact');
    $emailC    = $this->input->post('emailContact');
    $msg      = $this->input->post('msgContact');
   
    //Server settings
      // Konfigurasi email
    $config = [
           'mailtype'  => 'html',
           'charset'   => 'utf-8',
           'protocol'  => 'smtp',
           'smtp_host' => 'ssl://smtp.gmail.com',
           'smtp_user' => 'noreply.zoomin@gmail.com',    // Ganti dengan email gmail kamu
           'smtp_pass' => 'zoominindonesia',      // Password gmail kamu
           'smtp_port' => 465,
           'crlf'      => "\r\n",
           'newline'   => "\r\n"
       ];

    // Load library email dan konfigurasinya
    $this->load->library('email', $config);

    // Email dan nama pengirim
    $this->email->from($emailC, $institusi.' | '.$nama);

    // Email penerima
    $this->email->to('halo@zoomin.id'); // Ganti dengan email tujuan kamu

    // Subject email
    $this->email->subject('Website Zoomin | '.$institusi);

    // Isi email
    $this->email->message($msg);

    // Tampilkan pesan sukses atau error
    if ($this->email->send()) {
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Terima Kasih. !</strong> Pesan Anda telah terkirim.
        </div>');
        redirect('Contact');
    } else {
        $this->session->set_flashdata('msg',
        '<div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Oh no!</strong> Sepertinya ada kesalahan dalam mengirim pesan, silahkan coba lagi.
        </div>');
      redirect('Contact');
    }
  }
}