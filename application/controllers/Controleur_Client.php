<?php


class Controleur_Client extends CI_Controller{
    
   function __construct() {
       parent::__construct();
   }
    
   
 /* public function index(){
      $this->load->model('ModelClient');
        $data['fetch_data']=$this->ModelClient->fetch_data();
          $this->load->view('VClient',$data);
  }*/
  public function index(){
      $this->load->library('form_validation');
       $this->load->model('ModelClient');
        //$data['fetch_data']=$this->ModelClient->fetch_data();
          $this->load->view('login');
  }
  
  public function delete_data(){
      $ID_CLIENT = $this->uri->segment(3);
        $this->load->model('ModelClient');
          $this->ModelClient->delete_data($ID_CLIENT);
            $this->index();
  }
    public function updata_data(){
        $client_id = $this->uri->segment(3);
          $this->load->model('ModelClient');
            $data['user_data']=$this->ModelClient->fetch_single_data($client_id);
               $data['fetch_data']=$this->ModelClient->fetch_data();
                  $this->load->view('VClient',$data);
    }
    
    public function process(){
      //$this->load->library('form_validation');
       $this->load->model('ModelClient');
        //$data['fetch_data']=$this->ModelClient->fetch_data();
              $username = $this->input->post('username');
              $password = $this->input->post('password');
              /*if($username=='admin' && $password=='admin')*/
              if($this->ModelClient->can_login($username,$password)){
                  $data['username']=$username;
                  $data['password']=$password;
                  $this->load->view('welcom',$data);
                  
                  
              }
              else{
                  
                  $data['error']="compte invalide";
                  $this->load->view('login',$data);
              }
          
  }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  /*public function login(){
        $data['titre']="login pour ouvrire une session";
        $this->load->view('login',$data);
    }
    
    public function login_validation(){
        
        $this->load->library('form_validation');
         $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('password','Passeword','required');
           if($this->form_validation->run()){
               //true
              $username = $this->input->post('username');
              $password = $this->input->post('password');
              //->model
              $this->load->model('ModelClient');
               if($this->ModelClient->can_login($username,$password)){
                   $session_data = array('username'=>$username
                           );
                   $thos->session->set_userdata($session_data);
                   redirect(base_url() . 'index/enter');
               }
               else{
                   $thos->session->set_flashdata('error','username et password non valides');
                   redirect(base_url() . 'index/login');
               }
            
           }
           else{
               //false
            $this->login();
           }
        
    }
    public function enter(){
        if($this->session->userdata('username')!=''){
            echo '<h2>Welcome_'.$this->session->userdata('username').'</h2>';
            echo '<label><a href="'.base_url().'index/logout">Logout</a></label>';
            
        }
        else{
            redirect(base_url() . 'index/login');
        }
    }
    public function logout(){
        $this->session->unset_userdata('username');
        redirect(base_url() . 'index/login');
    }*/
}
