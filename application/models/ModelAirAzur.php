<?php

class ModelAirAzur extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }
    /////////////////////////////////////////
     /*function getdataclient() {
        $this->load->database();
        $query = $this->db->get('client_az');
        //$this->db->delete('client_az',array ('id' => $id));
        return $query->result();
    }*/
    /////////////////////////////////////
     function getdatavol() {
        $this->load->database();
        $query = $this->db->get('vol_az');
        return $query->result();
    }
    /////////////////////////////
     function getdataClient() {
        $this->load->database();
        $query = $this->db->get('reservation');
        return $query->result();
    }
    //////////////////////////////
   
    function getdatavol_client(){
           $this->load->database();
           $this->db->select('reservation.nom,reservation.prenom,reservation.NUM_RESERVATION,reservation.DATE_RESERVATION,reservation.ID_CLIENT,reservation.ID_VOLE,vol_az.NOM_COMPA');
           $this->db->from('reservation');
           $this->db->join('vol_az','vol_az.ID_VOLE=reservation.ID_VOLE');
           //$this->db->where(array('vol_az.ID_VOLE' => 1));
           $query=$this->db->get();
           //$data=
           return $query->result();
    }
    //////////////////////////////////////
    //////////////////////////////////////
     function ajoute($data) {
        $this->load->database();
        $this->db->insert('reservation', $data);
    }
    /*****************************************/
    function ajouteVol($data){
        $this->load->database();
        $this->db->insert('vol_az',$data);
    }
     
    /***********************************/
      function delete($ID_VOLE) {
          
	$this->load->database();
        $this->db->where('ID_VOLE',$ID_VOLE);
        $this->db->delete('reservation'); 
	
      }
      /***************************************/
      function deletevol($ID_VOLE) {
          
	$this->load->database();
        $this->db->where('ID_VOLE',$ID_VOLE);
        $this->db->delete('vol_az'); 
	
      }
      //////////////////////////////////
      //////////////////////////////////
      function updateClient( $ID_CLIENT, $data ) {
          
	$this->load->database();

        $this->db->where('ID_CLIENT', $ID_CLIENT) ;
        $this->db->update('reservation', $data);
	
      }
      
      function updateVol( $ID_VOLE, $data ) {
          
	$this->load->database();

        $this->db->where('ID_VOLE', $ID_VOLE) ;
        $this->db->update('vol_az', $data);
	
      }
       /////////////////////////////////
      //////////////////////////////////
    
      function getByIdClient($ID_CLIENT) {

	
	$this->load->database();
	
	$query = $this->db->get_where('reservation', array('ID_CLIENT' => $ID_CLIENT));	    
	return $query->result();
	}
        
        function getByIdVol($ID_VOLE) {

	
	$this->load->database();
	
	$query = $this->db->get_where('vol_az', array('ID_VOLE' => $ID_VOLE));	    
	return $query->result();
	}
        
        
      /////////////////////////////////////
      ////////////////////////////////////
          
        function can_login($username,$password){
            $this->db->where('username',$username);
             $this->db->where('password',$password);
              $query = $this->db->get('users');
               //select * from users where username ='$username' and password='$password';
            if($query->num_rows()>0){
                return true;
            }
            else{
                return false;
            }
             
        }
        
}

