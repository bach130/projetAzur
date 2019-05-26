<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reservation
 *
 * @author cheri
 */
class Reservation Extends CI_Model {
    //put your code here
             var $id;
             var $nom;
             var $prenom;
             var $adresse;
             
    public function nom(){
        return $this->_nom;
    }
    
    /*public function getPrenom(){
        return $this->_prenom;
    }*/
   /* public function adresse(){
        return $this->_adresse;
    }*/
    public function setNom($nom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($nom))
    {
      $this->_nom = $nom;
    }
  }
    public function setPrenom($prenom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($prenom))
    {
      $this->_prenom = $prenom;
    }
  }
    public function setAdresse($adresse)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($prenom))
    {
      $this->_adresse = $adresse;
    }
  }
  public function getId(){
      return $this->_id;
  }
        
     public function presentation(){
        echo $this->_nom;
        echo $this->_prenom;
        echo $this->ADRESSE;
     }

	}


