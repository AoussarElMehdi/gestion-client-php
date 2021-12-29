<!doctype>
<html>
<?php
require_once("../model/gestionProduit.php");
require_once("../model/classes/Produit.php");
$GC=new gestionProduit();
$liste=$GC->getall();
?>

<head>
    <title>Liste Produit</title>
    <script src="../bootstrap_4.1.0_dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap_4.1.0_dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
    <a href="ajoutProduit.php" class="btn-group-vertical">Ajouter un Produit</a>
        <div class="row justify-content-center">            
            <table class="table table-hover">

                <thead class="table-info">

                    <th colspan="2">ID</th>
                    <th colspan="2">DESIGNATION</th>
                    <th colspan="2">Q-Stock</th>
                    <th colspan="2">PRIX</th>
                    <th colspan="3">OPTIONS</th>

                </thead>
                <?php
		foreach($liste as $Produit)
		{
			if(isset($Produit))
			{
		?>

                <tr>
                    <td><?php echo $Produit[0]; ?></td>
                    <td></td>
                    <td><?php echo $Produit[1]; ?></td>
                    <td></td>
                    <td><?php echo $Produit[2]; ?></td>
                    <td></td>
                    <td><?php echo $Produit[3]; ?></td>
                    <td></td>
                    <td>
                    <form action="editProduit.php" method="POST">
                        <input type="hidden" name="idP" value="<?php echo $Produit[0];?>" />
                        <input type="hidden" name="nom" value="<?php echo $Produit[1];?>" />
                        <input type="hidden" name="qstock" value="<?php echo $Produit[2];?>" />
                        <input type="hidden" name="prix" value="<?php echo $Produit[3];?>" />
                        <input type="submit" class="btn btn-success" value="editer" />
                    </form>
                    </td>
                    <td>
                    <form action="../controls/controls.php" method="POST">
                        <input type="hidden" name="idP" value="<?php echo $Produit[0];?>" />
                        <input type="submit" name="ActionProduit" class="btn btn-danger" value="delete" />
                    </form>
                    </td>
                    
                    
                </tr>

                <?php	
		}}
		?>

            </table>
        </div>

    </div>

</body>

</html>