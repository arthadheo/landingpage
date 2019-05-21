<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {
     private $_table = 'dt_messages';
     // post messages
     function post($data) {
         if ($this->db->insert($this->_table, $data)) {
             return TRUE;
         } else {
             return FALSE;
         }
     }
 }