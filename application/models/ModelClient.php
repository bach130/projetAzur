<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelClient
 *
 * @author cheri
 */
class ModelClient extends CI_Model {
    //put your code here
    function __construct() {
        parent::__construct();
       
        
        
   
    
    
    
    
    
    
    }   
    
    function fetch_data(){
        
        $query= $this->db->get('reservation');
        return $query;
    }
        function fetch_single_data($ID_CLIENT){
            
            $this->db->where('ID_CLIENT',$ID_CLIENT);
            $query = $this->db->get('reservation');
            return $query;
        }
        
        function delete_data($ID_CLIENT){
            $this->db->where('ID_CLIENT',$ID_CLIENT);
            $this->db->delete('reservation');
        }

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
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
