<?php


class ModelTest extends CI_Model{
    
  function __construct() {
      parent::__construct();
  }
  
  function getdata(){
      
      $this->load->database();
        $query = $this->db->get('vole_az');
        return $query->result();
  }
  function ajoute($data) {
        $this->load->database();
        $this->db->insert('reservation', $data);
    }
}

