<?php
require_once '../model/gestionClient.php';
require_once '../model/gestionCommande.php';
require_once '../model/gestionProduit.php';
require_once '../model/classes/Client.php';
require_once '../model/classes/Commande.php';
require_once '../model/classes/Produit.php';
 $CL=new Control();

  if(isset($_POST["ActionClient"]))
  {
    if($_POST["ActionClient"]=="Ajouter")
    {
    $client=new client($_POST["nom"],$_POST["adresse"],$_POST["tel"]);
    $CL->AjouterClient($client);
    header("location:../view/listeClient.php");
    }
  
  if($_POST["ActionClient"]=="Modifier")
  {
    $client=new client($_POST["nom"],$_POST["adresse"],$_POST["tel"]);
    $client->setId($_POST["id"]);
    $CL->ModifierClient($client);
    header("location:../view/listeClient.php");
  }

  if($_POST["ActionClient"]=="delete")
  {
    
    $CL->DeleteClient($_POST["idcl"]);
  header("location:../view/listeClient.php");
  }
  }
  if(isset($_POST["ActionCommande"]))
  {
      if($_POST["ActionCommande"]=="Ajouter")
      {
        $commande=new commande($_POST["Date"],$_POST["Type"],$_POST["Paye"],$_POST["id_Client"]);
        $CL->AjouterCommande($commande);
        header("location:../view/listeClient.php");
      }
      if($_POST["ActionCommande"]=="Modifier")
      {
        $commande=new commande($_POST["Date"],$_POST["Type"],$_POST["Payee"],$_POST["CommandeClient"]);
        $commande->setId($_POST["id"]);
        $CL->ModifierCommande($commande);
        header("location:../view/CommandeClient.php?CommandeClient={$_POST['CommandeClient']}");
      }
      if($_POST["ActionCommande"]=="delete")
      {
        
        $CL->DeleteCommande($_POST["CommandeClient"]);
      
      
      header("location:../view/CommandeClient.php?CommandeClient={$_POST['CommandeClient']}");
      
      }
  }
 
  if(isset($_POST["ActionProduit"]))
  {
      if($_POST["ActionProduit"]=="Ajouter")
      {
        $Produit=new produit($_POST["nom"],$_POST["qstock"],$_POST["prix"]);
        $CL->AjouterProduit($Produit);
        header("location:../view/ListeProduit.php");      }
      if($_POST["ActionProduit"]=="Modifier")
      {
        $Produit=new produit($_POST["nom"],$_POST["qstock"],$_POST["prix"]);
        $Produit->setId($_POST["idP"]);
        $CL->ModifierProduit($Produit);
        header("location:../view/ListeProduit.php");      }
      if($_POST["ActionProduit"]=="delete")
      { 
        $CL->DeleteProduit($_POST["idP"]);
        header("location:../view/ListeProduit.php");
      }
  }
  if(isset($_POST["ActionLigne"]))
  {
      if($_POST["ActionLigne"]=="add")
      {
        
        $CL->AjouterLigne($_POST["idcmd"],$_POST["idP"],$_POST["QCommande"]);
        header("location:../view/GSLigneCommande.php?idcmd={$_POST["idcmd"]}");     
      
      }
      if($_POST["ActionLigne"]=="Modifier")
      {
        $Produit=new produit($_POST["nom"],$_POST["qstock"],$_POST["prix"]);
        $Produit->setId($_POST["idP"]);
        $CL->ModifierProduit($Produit);
        header("location:../view/GSLigneCommande.php?idcmd={$_POST["idcmd"]}");  
      
      }
      if($_POST["ActionLigne"]=="delete")
      { 
        $CL->DeleteProduit($_POST["idP"]);
        header("location:../view/GSLigneCommande.php?idcmd={$_POST["idcmd"]}"); 
      }
  }
?>
<?php
class Control
{
  

 public function AjouterClient($client)
 {
   $gClient=new gesstionClient();

   $gClient->insert($client); 

 }

 public function ModifierClient($client)
 {
  $gClient=new gesstionClient();
   $gClient->update($client); 

 }

 public function DeleteClient($idclient)
 {
  $gClient=new gesstionClient();
   $gClient->delete($idclient); 

 }

public function Aff_Client()
{
  $gClient=new gesstionClient();
  $gClient->getall(); 
}

 public function AjouterCommande($commande)
 {
  $Gcommande=new gestionCommande();
   $Gcommande->insert($commande); 

 }

 public function ModifierCommande($idclient)
 {
  $GCommande=new gestionCommande();
  $GCommande->update($idclient); 

 }

 public function DeleteCommande($idclient)
 {
  $commande=new gestionCommande();
   $commande->delete($idclient); 

 }
 Public function Aff_CommandeBYClient($idcommande)
 {
  $commande=new gestionCommande();
  $commande->getCommandeByClient($idcommande);

 }

 public function AjouterLigne($idcommande,$Produit,$qte)
 {
  $commande=new gestionCommande();
  $commande->insertLigneCommande($idcommande,$Produit,$qte); 

 }

 public function ModifierLigne($idcommande,$Produit,$qte)
 {
  $commande=new gestionCommande();
   $commande->insertLigneCommande($idcommande,$Produit,$qte); 

 }

 public function DeleteLigne($idcommande,$Produit,$qte)
 {
  $commande=new gestionCommande();
   $commande->insertLigneCommande($idcommande,$Produit,$qte); 

 }

 public function AjouterProduit($Produit)
 {
   $gproduit=new gestionProduit();
   $gproduit->insert($Produit);

 }

 public function ModifierProduit($Produit)
 {
  
   $gproduit=new gestionProduit();
   $gproduit->update($Produit); 

 }

 public function DeleteProduit($idclient)
 {
   $gproduit=new gestionProduit();
   $gproduit->delete($idclient); 

 }

 Public function Aff_Produit()
 {
  $gproduit=new gestionProduit();
  $gproduit->getall();

 }
}

?>