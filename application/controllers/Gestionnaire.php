<?php

class Gestionnaire extends CI_Controller{
    
  function __construct() {
        parent::__construct();
          $this->load->helper('form');
        $this->load->helper('url');
        
        $this->load->library('form_validation');
         
    }
    /**
    * index pour affiche la page d'accueil
    */
    public function index(){
       
        /*$this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');*/
        //$this->load->view('login');
        $this->load->view('accueil');
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
     * affiche la page qui visualise les informations des vols
     */
    public function insertcatalogue(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        //$this->affichervol();
        $this->process();
    }
    /**
     * affiche la page qui visualise les informations des client
     */
    public function insertClient(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->afficherClient();
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
     * fonction qui fait appelle au formulaire ajoutervol
     * elle est appellé dans la vue voir_les vols
     */
    public function insertajoutervol(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->view('AjouterVol');
        
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
     * 
     */
    /* public function supp(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->view('Voir_les_Reservation');
    }
    /*****************************/
    /* public function suppvol(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->view('Voir_les_Vols');
    }*/
    
    /**
     * fonction qui affiche les vols
     *  
     */
    
    public function affichervol(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
      $this->load->model('ModelAirAzur');
      $data['tab']= $this->ModelAirAzur->getdatavol();
      $this->load->view('Voir_Les_Vols',$data);
       
    }
    /**
     * fonction qui affiche les client
     */
    public function afficherClient(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
      $this->load->model('ModelAirAzur');
      $data['tabc']= $this->ModelAirAzur->getdataClient();
      $this->load->view('Voir_Client',$data);
        
    }
    /**
     * fonction qui affiche les reservation
     */
      public function afficherreservation(){
      $this->load->model('ModelAirAzur');
      $data['tab1']= $this->ModelAirAzur->getdatavol_client();
      $this->load->view('Voir_les_Reservation',$data);
       
    }
   /**
   *  fonction qui ajoute des client
   */
   

    public function ajouter(){
        $this->load->model('ModelAirAzur');
        $data = array(
             'nom' => $this->input->post('nom','true'),
             'prenom' => $this->input->post('prenom','true'),
             'ADRESSE' => $this->input->post('ADRESSE','true'),
             'NUM_TEL' => $this->input->post('NUM_TEL','true'),
             'NUM_RESERVATION'=> $this->input->post('NUM_RESERVATION','true'),
             'DATE_RESERVATION'=>$this->input->post('DATE_RESERVATION','true'),
             'ID_VOLE'=>$this->input->post('ID_VOLE','true'),
             
                       );

      $this->ModelAirAzur->ajoute($data);

          $data['tab'] = $this->ModelAirAzur->getdatavol();

               $data['titre'] = "Voir_Les_Vols";

                     $this->load->view('Voir_Les_Vols', $data);
                     
                     ////////////////////
                     
                     ///////////////////
                    
       
   }
   /**
    * ajouter un vol
    */
    public function ajoutervol(){
        $this->load->model('ModelAirAzur');
        $data = array(
             'NOM_COMPA' => $this->input->post('NOM_COMPA','true'),
             'NOM_VILLE_DEPART' => $this->input->post('NOM_VILLE_DEPART','true'),
             'NOM_VILLE_ARRIVE' => $this->input->post('NOM_VILLE_ARRIVE','true'),
             'NOM_AERO_DEPART' => $this->input->post('NOM_AERO_DEPART','true'),
             'NOM_AERO_ARRIVEE'=>$this->input->post('NOM_AERO_ARRIVEE','true'),
             'DATE_DEPART' =>$this->input->post('DATE_DEPART','true'),
             'HEURE_DEPART'=>$this->input->post('HEURE_DEPART','true'),
             'HEURE_ARRIVEE'=>$this->input->post('HEURE_ARRIVEE','true'),
             'DUREE_VALIDITE'=>$this->input->post('DUREE_VALIDITE','true')
           
            
                       );

      $this->ModelAirAzur->ajoutevol($data);

          $data['tab'] = $this->ModelAirAzur->getdatavol();

               $data['titre'] = "Voir_Les_Vols";

                     $this->load->view('Voir_Les_Vols', $data);
       
   }
        
   
    
    /**
     * 
     */
    public function Modifier_formuvol(){
        $IDVol=$this->uri->segment(3);
        $this->load->model('ModelAirAzur');
        //$reservation = $this->ModelAirAzur->getByIdClient($IDCLIENT);
        
        //$ID_VOLE=$this->uri->segment(3,0);
        $Vol= $this->ModelAirAzur->getByIdVol($IDVol);
        
        foreach($Vol as $raw):
            
            $data['tab1']= array(
                'ID_VOLE'=>$raw->ID_VOLE,
                'NOM_COMPA'=>$raw->NOM_COMPA
                );
            $this->load->view('Modifiervol',$data);
        endforeach;
    }
    
    /**
     * fonction qui mis à jour et corrige les infos des vols
     */
       public function modifierVol(){
        $this->load->model('ModelAirAzur');
        
        $data['tab1']= array( 'ID_VOLE'=>$this->input->post('ID_VOLE','true'),
            'NOM_COMPA'=>$this->input->post('NOM_COMPA','true')
            
            );
        $this->ModelAirAzur->updateVol($data['tab1']['ID_VOLE'], $data['tab1']);
       // $this->ModelAirAzur->updateVol($data['tab1']['ID_VOLE'], $data['tab1']);

        $texte = $this->ModelAirAzur->getdatavol();
        $data['tab'] = $texte;
        $data['titre'] = "Voir_Les_Vols";
        $this->load->view('Voir_Les_Vols', $data);
    }
    /**
     * fonction qui fait appelr au formulaire modef 
     * 
     */
     public function Modifier_formu(){
        $IDCLIENT=$this->uri->segment(3);
        $this->load->model('ModelAirAzur');
        //$reservation = $this->ModelAirAzur->getByIdClient($IDCLIENT);
        
        //$ID_VOLE=$this->uri->segment(3,0);
        $Client= $this->ModelAirAzur->getByIdClient($IDCLIENT);
        
        foreach($Client as $raw):
            
            $data['tab1']= array(
                'ID_CLIENT'=>$raw->ID_CLIENT,
                'NOM'=>$raw->NOM,
                'PRENOM'=>$raw->PRENOM,
                'ADRESSE'=>$raw->ADRESSE);
            $this->load->view('Modifier',$data);
        endforeach;
    }
   
   /**
    * fonction qui mis à jour et corrige les infos des clients
    */
   public function modifierClient(){
        $this->load->model('ModelAirAzur');
        
        $data['tab1']= array( 'ID_CLIENT'=>$this->input->post('ID_CLIENT','true'),
            'NOM'=>$this->input->post('NOM','true'),
            'PRENOM'=>$this->input->post('PRENOM','true'),
            'ADRESSE'=>$this->input->post('ADRESSE','true')
            );
        $this->ModelAirAzur->updateClient($data['tab1']['ID_CLIENT'], $data['tab1']);
       // $this->ModelAirAzur->updateVol($data['tab1']['ID_VOLE'], $data['tab1']);

        $texte = $this->ModelAirAzur->getdataClient();
        $data['tabc'] = $texte;
        $data['titre'] = "Voir_Client";
        $this->load->view('Voir_Client', $data);
    }
    
    /**
     * 
     */
    public function Modifier_formuReservation(){
       $IDCLIENT=$this->uri->segment(3);
        $this->load->model('ModelAirAzur');
        //$reservation = $this->ModelAirAzur->getByIdClient($IDCLIENT);
        
        //$ID_VOLE=$this->uri->segment(3,0);
        $Client= $this->ModelAirAzur->getByIdClient($IDCLIENT);
        
        foreach($Client as $rawr):
            
            $data['tab1']= array(
                'ID_CLIENT'=>$rawr->ID_CLIENT,
                'ID_VOLE'=>$rawr->ID_VOLE,
                );
            $this->load->view('ModefierResr',$data);
        endforeach;
    }
    /**
     * fonction qui modéfie les information des reservation dorectement dans la page 
     */
       public function modifierReservation(){
           $this->load->model('ModelAirAzur');
        
        $data['tab1']= array( 'ID_CLIENT'=>$this->input->post('ID_CLIENT','true'),
            'ID_VOLE'=>$this->input->post('ID_VOLE','true'),
            
            );
        $this->ModelAirAzur->updateClient($data['tab1']['ID_CLIENT'], $data['tab1']);
       // $this->ModelAirAzur->updateVol($data['tab1']['ID_VOLE'], $data['tab1']);

        $texte = $this->ModelAirAzur->getdatavol_client();//getdataClient();
        $data['tab1'] = $texte;
        $data['titre'] = "Voir_les_Reservation";
        $this->load->view('Voir_les_Reservation', $data);
        
    }
    
    /**
     * fonction qui suprime les tuple
     */
    public function supprimer() {

        $ID_VOLE= $this->uri->segment(3, 0);
        $this->load->model('ModelAirAzur');
        $this->ModelAirAzur->delete($ID_VOLE);
        $this->afficherreservation();
    }
    /***********************************************/
        public function supprimervol() {

        $ID_VOLE= $this->uri->segment(3, 0);
        $this->load->model('ModelAirAzur');
        $this->ModelAirAzur->deletevol($ID_VOLE);
        $this->affichervol();
    }
    
    /**
     * fonction  login
     */    
    public function process(){
      //$this->load->library('form_validation');
       $this->load->model('ModelAirAzur');
        //$data['fetch_data']=$this->ModelClient->fetch_data();
              $username = $this->input->post('username');
              $password = $this->input->post('password');
              /*if($username=='admin' && $password=='admin')*/
              if($this->ModelAirAzur->can_login($username,$password)){
                  //$data['username']=$username;
                  //$data['password']=$password;
                  //$this->load->view('Reserver',$data);
                  $this->session->set_userdata(array('username'=>$username));
                 // $this->load->view('Accueil');
                  $this->affichervol();
                  
                  
              }
              else{
                  
                  $data['error']="compte invalide";
                  $this->load->view('login',$data);
              }
          
  }
       //////////////////////////
     /*public function afficherClient(){
         $this->load->model('ModelAirAzur');
         $data['tabc']=$this->ModelAirAzur-> getById(1);
         $this->load->view('Voir_Client',$data);
     }*/
    ///////////////////////////
 
   /* $IDCLIENT=$this->uri->segment(3);
        $this->load->model('ModelAirAzur');
        //$reservation = $this->ModelAirAzur->getByIdClient($IDCLIENT);
        
        //$ID_VOLE=$this->uri->segment(3,0);
        $Client= $this->ModelAirAzur->getByIdClient($IDCLIENT);
        
        foreach($Client as $raw):
            
            $data['tab1']= array(
                'ID_VOLE'=>$raw->ID_VOLE,
                );
            $this->load->view('ModefierResr',$data);
        endforeach;*/
    
    /*
     * $this->load->model('ModelAirAzur');
        
        $data['tab1']= array( 'ID_VOLE'=>$this->input->post('ID_VOLE','true'),
            
            );
         $this->ModelAirAzur->updateClient($data['tab1']['ID_VOLE'], $data['tab1']);
       // $this->ModelAirAzur->updateVol($data['tab1']['ID_VOLE'], $data['tab1']);

        $texte = $this->ModelAirAzur->getdataClient();
        $data['tabc'] = $texte;
        $data['titre'] = "Voir_Les_Vols";
        $this->load->view('Voir_Les_Vols', $data);
     */
}

