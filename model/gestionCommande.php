<?php 
require_once 'classes/DBconnect.php' ;
require_once 'gestion.php';
require_once 'classes/Commande.php';

class gestionCommande extends gestion
{
    protected $tablename="Commande";
    protected $sql;
   public function insert($Commande)
   {
     
     $this->sql="insert into ".$this->tablename." values(null,:date,:type,:id_client,:payee)";
     $bdd= DBconnect::Connect();
     $requete=$bdd->prepare($this->sql);
     $liste_param=array(
         "date"=>$Commande->getDate(),
         "type"=>$Commande->getType(),
         "id_client"=>$Commande->getIdclient(),
         "payee"=> $Commande->getPayee()
 
     );
     $requete->execute($liste_param);
     
 
   }
 
    public function update($Commande)
    {
     
     $this->sql="update ".$this->tablename." set DATECOM=:date,type=:type,id_client=:id_client,payee=:payee where id=:id";
     $bdd= DBconnect::Connect();
     $requete=$bdd->prepare($this->sql);
     $liste_param=array(
        "date"=>$Commande->getDate(),
        "type"=>$Commande->getType(),
        "id_client"=>$Commande->getIdclient(),
        "payee"=> $Commande->getPayee(),
        "id"=>$Commande->getId()
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

    public function getCommandeByClient($id_client)
    {
     $bdd= DBconnect::Connect();
     $this->sql="select * from ".$this->tablename." Where ID_CLIENT=".$id_client;
     $requete=$bdd->query($this->sql);
     $ligne=$requete->fetchall();
     return $ligne;
    }


    public function insertLigneCommande($id_commande,$Produit,$qte)
    {
        $this->sql="insert into LigneCommande values(:id_commande,:Produit,:qte)";
     $bdd= DBconnect::Connect();
     $requete=$bdd->prepare($this->sql);
     $liste_param=array(
         "id_commande"=>$id_commande,
         "Produit"=>$Produit,
         "qte"=>$qte
         
 
     );
     $requete->execute($liste_param);
    }
    public function deleteLigneCommande($id_commande,$Produit,$qte)
    {
     
    }

    public function getLigneByCommande($id_Commande)
    {
     $bdd= DBconnect::Connect();
     $this->sql="select ID_COMMANDE,produit.DESIGNATION,SUM(QTE_COMMANDEE) FROM `lignecommande`,`produit` WHERE produit.ID=ID_PRODUIT and ID_COMMANDE=".$id_Commande." group BY ID_COMMANDE,produit.DESIGNATION";
     $requete=$bdd->query($this->sql);
     $ligne=$requete->fetchall();
     return $ligne;
    }
}


?>