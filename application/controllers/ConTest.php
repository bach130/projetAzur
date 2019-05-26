<?php 
//use app\models\Reservation;
include_once('Reservation.php');
class ConTest extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        $this->load->helper('form');
         $this->load->helper('url');
          $this->load->model('ModelTest');
           $this->load->libraries('Reservation');
           $this->ajouter2();
        //$this->load->view('ViewTest');
       /* $mesdonnee= $this->ModelTest->getdata();
      $data['tab']=$mesdonnee;
     // $data['tab1'] = "le titre de mon site";
      // $this->modelforum2->ajoute($data);
      $this->load->view('ViewTest',$data);*/
    }
     
      public function ajouter2(){
          
        $this->load->model('ModelTest');
         $mareservation= new Reservation ($nom, $prenom, $adresse);
          $this->load->ModelTest->ajoute($mareservation) ;
           $this->load->view('ViewTest',$mareservation);
    }
    

                 
       
   
   
}
