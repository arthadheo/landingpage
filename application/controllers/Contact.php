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
      $this->load->view('layout/v_header');
      $this->load->view('pages/contact/v_home');
      $this->load->view('layout/v_footer');
  }

  function send_message(){
    // DEFINE FORM INPUT
    $name_input   = $this->input->post('nameContact');
    $email_input  = $this->input->post('emailContact');
    $msg_input    = $this->input->post('msgContact');
    $hp_input    = $this->input->post('hpContact');
    $time         = time();
    $date_msg     = date('Y-m-d H:i:s',$time);

    $data = array(
      'name_msg'    => $name_input,
      'email_msg'   => $email_input,
      'hp_msg'   => $hp_input,
      'msg'         => $msg_input,
      'date_msg'    => $date_msg,
    );

    $feedback = $this->contacts->post($data);
    if ($feedback == false) {
      $this->session->set_flashdata('msg',
        '<div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Oh no!</strong> Sepertinya ada kesalahan dalam mengirim pesan, silah coba lagi.
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

  function send_email($data) {
    $nama     = $data['name_msg'];
    $email    = $data['email_msg'];
    $hp    = $data['hp_msg'];
    $msg      = $data['msg'];
    $tgl      = $data['date_msg'];
    //Server settings
    $mail = $this->phpmailerlib->load();
    try {                          // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    // $mail->SMTPDebug = 4; //Alternative to above constant                               // Enable SMTP authentication
    $mail->Username = 'gema.saputera9@gmail.com';                 // SMTP username
    $mail->Password = 'Evilrosenew09!';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('noreply.zoomin@zoomin.id', 'Zoomin Indonesia | Gamification Platform');
    $mail->addAddress('gema.xavier@gmail.com', '');
    // $mail->addCC('gema.saputera@gmail.com', ''.$user.'');     // Add a recipient
    // $mail->addReplyTo('gema.saputera@gmail.com', 'Gema');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '[ZOOMIN] '.$nama.', telah mengirimkan pesan kepada Anda';
    $mail->Body    = '
    <!DOCTYPE html>
    <head>
      <title>'.$nama.' mengirim pesan</title>
    </head>
    <body>
      <div style="width:100%; height:auto;">
        <div>
          <table style="min-width: 100%; background: #F9F9F9;">
            <tbody style="background-color:#F9F9F9;">
              <tr height="32"></tr>
              <tr align="center">
                <td width="32" ></td>
                <td>
                    <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px">
                      <tbody>
                        <tr style="text-align:center">
                          <img style="width: 15rem;" src="https://zoomin.id/dist/images/logos/zoomin_logo_black.png">
                        </tr>
                        <tr height="16"></tr>
                        <tr>
                          <td>
                            <table bgcolor="#ED2A2E" border="0" cellpadding="0" cellspacing="0" style="min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:0;border-top-left-radius:10px;border-top-right-radius:10px" width="100%">
                              <tbody>
                                <tr height="72"></tr>
                                <tr style="text-align:left;">
                                  <td width="32"></td>
                                  <td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25;min-width:300px">
                                    Pesan diterima
                                  </td>
                                  <td width="32"></td>
                                </tr>
                                <tr style="text-align:left;">
                                  <td width="32"></td>
                                  <td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:12px;color:#ffffff;line-height:1.25;min-width:300px">
                                    Zoomin Indonesia
                                  </td>
                                  <td width="32"></td>
                                </tr>
                                <tr height="18"></tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-top:0; padding: 2.75rem .5rem; border-bottom-left-radius: 10px;border-bottom-left-right: 10px;" width="100%">
                              <tbody>
                                <tr height="18"></tr>
                                <tr>
                                  <td width="32"></td>
                                  <td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5">
                                    Anda telah menerima pesan notifikasi pada '.$tgl.'
                                  </td>
                                  <td width="32"></td>
                                </tr>
                                <tr height="18"></tr>
                                <tr>
                                  <td width="32"></td>
                                  <td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                      <tbody>
                                        <tr>
                                          <td width="65">
                                          </td>
                                          <td style="text-align:left; font-weight:bold;">
                                            Nama pengirim :
                                          </td>
                                          <td style="text-align:right; font-weight:bold;">
                                            '.$nama.'
                                          </td>
                                          <td width="65">
                                          </td>
                                        </tr>
                                        <tr>
                                          <td width="65">
                                          </td>
                                          <td style="text-align:left; font-weight:bold;">
                                            Email :
                                          </td>
                                          <td style="text-align:right; font-weight:bold;">
                                            '.$email.'
                                          </td>
                                          <td width="65">
                                          </td>
                                        </tr>
                                        <tr>
                                          <td width="65">
                                          </td>
                                          <td style="text-align:left; font-weight:bold;">
                                            No. HP/Telp :
                                          </td>
                                          <td style="text-align:right; font-weight:bold;">
                                            '.$hp.'
                                          </td>
                                          <td width="65">
                                          </td>
                                        </tr>
                                        <tr>
                                          <td width="65">
                                          </td>
                                          <td style="text-align:left; font-weight:bold;">
                                            Pesan :
                                          </td>
                                          <td style="text-align:right; font-weight:bold;">
                                            '.$msg.'
                                          </td>
                                          <td width="65">
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                  <td width="32"></td>
                                </tr>
                                <tr>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </td>
                <td width="32" ></td>
              </tr>
              <tr height="32"></tr>
            </tbody>
          </table>
        <div>
      </div>
    </body>
    </html>
                      ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
      echo 'Message has been sent';
    } catch (Exception $e) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
  }
  
}
