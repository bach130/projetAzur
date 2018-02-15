<?php

class Gestionnaire extends CI_Controller{
    
  function __construct() {
        parent::__construct();
        
         
    }
    /**
    * index pour affiche la page d'accueil
    */
    public function index(){
       
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->view('accueil');
    }
    /**
     * affiche la page qui visualise les informations des vols
     */
    public function insertcatalogue(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->affichervol();
    }
    /**
     * affiche la page qui visualise les informations des reservations
     */
    public function insertreservation(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->afficherreservation();
        
         
    }
    /**
     * fonction qui fait appelle au formulaire modifier
     */
     public function insertmodifier(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->view('Modifier');
        
    }
    /**
     * fonction qui fait appelle au formilaire reserver
     * elle est appeller dans la vue voire_les_vols
     */
     public function insertreserve(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->view('Reserver');
        
    }
    /**
     * 
     */
     public function supp(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->view('Modifier');
    }
    /**
     * fonction qui affiche la page d'accueil
     */
    public function accueil(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->view('Accueil');
        
    }
    /**
     * fonction qui affiche les vole
     *  
     */
    
    public function affichervol(){
      $this->load->model('ModelAirAzur');
      $data['tab']= $this->ModelAirAzur->getdatavole();
      $this->load->view('Voir_Les_Vols',$data);
       
    }
    /**
     * fonction qui affiche les reservation
     */
      public function afficherreservation(){
      $this->load->model('ModelAirAzur');
      $data['tab1']= $this->ModelAirAzur->getdatavole();
      $this->load->view('Voir_les_Reservation',$data);
       
    }


    public function ajouter(){
        $this->load->model('ModelAirAzur');
        $data = array(
             'nom' => $this->input->post('nom','true'),
                  'prenom' => $this->input->post('prenom','true'),
                       );

      $this->ModelAirAzur->ajoute($data);

          $data['tab'] = $this->ModelAirAzur->getdatavole();

               $data['titre'] = "Voir_Les_Vols";

                     $this->load->view('Voir_Les_Vols', $data);
       
   }
   
   
   public function modifier(){
        $this->load->model('ModelAirAzur');
        
        $data['tab1']= array( 'id'=>$this->input->post('id','true'),
            'nom'=>$this->input->post('nom','true'),
            'prenom'=>$this->input->post('prenom','true')
            );
        $this->ModelAirAzur->update($data['tab1']['id'], $data['tab1']);

$bloctexte = $this->ModelAirAzur->getdataclient();
$data['bloc'] = $bloctexte;
$data['titre'] = "Voir_Les_Reservation";
$this->load->view('Voir_les_Reservation', $data);
    }
    /**
     * fonction qui suprime les tuple
     */
    public function supprimer() {

        $id = $this->uri->segment(3, 0);


        $this->ModelAirAzur->delete($id);

         $data['tab'] = $this->ModelAirAzur->getdataclient();

        $data['titre'] = "Suppression";

        $this->load->view('Voir_Les_Reservation', $data);
    }
 
    
}

