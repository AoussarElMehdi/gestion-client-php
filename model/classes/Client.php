<?php
 
 class client {

     private $id ;
     private $nom ;
     private $adresse ;
     private $tel ;

     public function __construct ($nom,$adress,$tel){
         
         $this->nom = $nom;
         $this->adresse = $adress;
         $this->tel = $tel;
     }
    public function getId()     { return $this->id; }

     public function getNom()    { return $this->nom; }

     public function getAdresse() { return $this->adresse; }

     public function getTel()     { return $this->tel; }

     public function setId($id)           { $this->id = $id; }

     public function setNom($nom)        { $this->nom = $nom; }

     public function setAdresse($adresse) { $this->adresse = $adresse; }

     public function setTel($tel)         { $this->tel = $tel; }


     
     
    


    }

?>