<?php 
require_once 'classes/DBconnect.php' ;
require_once 'gestion.php';

class gestionProduit extends gestion
{
    protected $tablename="Produit";
    protected $sql;
   public function insert($Produit)
   {
     
     $this->sql="insert into ".$this->tablename." values(null,:designation,:qte_stock,:prix_unit)";
     $bdd= DBconnect::Connect();
     $requete=$bdd->prepare($this->sql);
     $liste_param=array(
         "designation"=>$Produit->getDesignation(),
         "qte_stock"=>$Produit->getQte_stock(),
         "prix_unit"=>$Produit->getPrix_unit()
         
 
     );
     $requete->execute($liste_param);
     
 
   }
 
    public function update($Produit)
    {
     
     $this->sql="update  ".$this->tablename." set designation=:designation,qte_stock=:qte_stock,prix_unit=:prix_unit where id=:id";
     $bdd= DBconnect::Connect();
     $requete=$bdd->prepare($this->sql);
     $liste_param=array(
        "designation"=>$Produit->getDesignation(),
        "qte_stock"=>$Produit->getQte_stock(),
        "prix_unit"=>$Produit->getPrix_unit(),
        "id"=>$Produit->getId()

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