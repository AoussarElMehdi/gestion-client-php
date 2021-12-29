<!doctype>
<html>
<?php
require_once("../model/gestionProduit.php");
require_once("../model/gestionCommande.php");
require_once("../model/classes/Produit.php");
$GC=new gestionProduit();
$liste=$GC->getall();
$LC=new gestionCommande();
if(isset($_POST["idcmd"]))
{
  $ListeLigne=$LC->getLigneByCommande($_POST["idcmd"]);
  $_idcmd=$_POST["idcmd"];
}
if(isset($_GET["idcmd"]))
{
  $ListeLigne=$LC->getLigneByCommande($_GET["idcmd"]);
  $_idcmd=$_GET["idcmd"];
}
?>

<head>
    <title>Liste LigneCommande</title>
    

</head>

<body>
    <div class="container">
    <div>  <a href="ajoutProduit.php" class="btn-group-vertical">Ajouter un Produit</a></div>
        <div class="row">
            <div class="col-sm" style="margin-right: 1% ">
              
                <div class="row justify-content-center">
                    <table class="table table-hover" >

                        <thead class="table-info">

                            <th colspan="2">Produit</th>
                            <th colspan="2">Q-Stock</th>
                            <th colspan="2">PRIX</th>
                            <th colspan="2">Q-Commandée</th>
                            <th colspan="2">OPTIONS</th>

                        </thead>
                        <?php
		foreach($liste as $Produit)
		{
			if(isset($Produit))
			{
		?>

                        <tr>
                            <td><?php echo $Produit[1]; ?></td>
                            <td></td>
                            <td><?php echo $Produit[2]; ?></td>
                            <td></td>
                            <td><?php echo $Produit[3]; ?></td>
                            <td></td>
                            <form action="../controls/controls.php" method="POST">
                            <td> 
                            <input type="text" name="QCommande" class="" value="" required />
                            </td>
                            <td></td>
                            <td>
                              <?php if(isset($_idcmd)){?>
                                    <input type="hidden" name="idcmd" value="<?php echo $_idcmd;?>" />
                                <?php }?>
                                    <input type="hidden" name="idP" value="<?php echo $Produit[0];?>" />
                                    <input type="submit" name="ActionLigne" class="btn btn-danger" value="add" />
                                
                            </td>
                            </form>

                        </tr>

                        <?php	
		}}
		?>

                    </table>
                </div>
            </div>
            <div class="col-sm">
                <div class="row justify-content-center">
                    <table class="table table-hover">

                        <thead class="table-info">
                            <th colspan="2">Commande</th>
                            <th colspan="2">DESIGNATION</th>
                            <th colspan="2">Q-Commandée</th>
                            <th colspan="3">OPTIONS</th>

                        </thead>
                        <?php
                        if(isset($ListeLigne))
                        {
		foreach($ListeLigne as $LigneCommande)
		{
			if(isset($LigneCommande))
			{
		?>

                        <tr>
                            <td><?php echo $LigneCommande[0]; ?></td>
                            <td></td>
                            <td><?php echo $LigneCommande[1]; ?></td>
                            <td></td>
                            <td><?php echo $LigneCommande[2]; ?></td>
                            <td></td>
                            <td> 
                                <form action="../controls/controls.php" method="POST">
                                    <input type="hidden" name="idP" value="<?php echo $LigneCommande[0];?>" />
                                    <input type="hidden" name="idC" value="<?php echo $LigneCommande[1];?>" />
                                    <input type="hidden" name="QC" value="<?php echo $LigneCommande[2];?>" />
                                    <input type="submit" name="ActionLigne" class="btn btn-info" value="Update" />
                                    <input type="submit" name="ActionLigne" class="btn btn-danger" value="delete" />
                                </form>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <?php	
		}}}
		?>

                    </table>
                </div>


            </div>
        </div>
    </div>
    <script src="../bootstrap_4.1.0_dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap_4.1.0_dist/css/bootstrap.min.css">
</body>

</html>