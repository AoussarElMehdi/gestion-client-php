<?php
require_once 'gestion.php';
require_once 'classes/DBconnect.php';
class gestionClient extends gestion
{
   public $tablename="client";
   protected $sql;
  public function insert($Client)
  {
    
    $this->sql="insert into ".$this->tablename." values(null,:nom,:adresse,:tel)";
    echo $this->sql;
    $bdd= DBconnect::Connect();
    $requete=$bdd->prepare($this->sql);
    $liste_param=array(
        "nom"=>$Client->getNom(),
        "adresse"=>$Client->getAdresse(),
        "tel"=>$Client->getTel()

    );
    $requete->execute($liste_param);
    $requete->closeCursor();
   

  }

   public function update($Client)
   {
    
    $this->sql="update ".$this->tablename." set nom=:nom,adresse=:adresse,tel=:tel where id=:id";
    $bdd= DBconnect::Connect();
    $requete=$bdd->prepare($this->sql);
    $liste_param=array(
        "nom"=>$Client->getNom(),
        "adresse"=>$Client->getAdresse(),
        "tel"=>$Client->getTel(),
        "id"=>$Client->getId()
    );
    $requete->execute($liste_param);
    

   }

   public function getall()
   {
    $bdd= DBconnect::Connect();
    $this->sql="select * from ".$this->tablename;
    $requete=$bdd->query($this->sql);
    $ligne=$requete->fetchall();
    return $ligne;
   }
   



}







?>