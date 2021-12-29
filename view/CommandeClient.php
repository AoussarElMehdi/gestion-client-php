<html>
<?php
require_once("../model/gestionCommande.php");
require_once("../model/classes/Commande.php");
$GC = new gestionCommande();
if(isset($_POST["CommandeClient"])){
$id_client = $_POST["CommandeClient"];

$liste = $GC->getCommandeByClient($id_client);
}
if(isset($_GET["CommandeClient"])){
    $id_client = $_GET["CommandeClient"];
    
    $liste = $GC->getCommandeByClient($id_client);
    }
?>

<head>
    <title>Liste Commande</title>
    <script src="../bootstrap_4.1.0_dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap_4.1.0_dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">

    <form action="ajoutCommande.php" method="POST">
        <input type="hidden" name="idcl" value="<?php echo $id_client ?>" />
        <input type="submit" value="Ajouter Commande" class="btn btn-primary">
    </form>  
        <div class="row justify-content-center">
            <table class="table">

                <thead>

                    <th colspan="2">ID</th>
                    <th colspan="2">DATECOM</th>
                    <th colspan="2">TYPE</th>
                    <th colspan="2">PAYEE</th>
                    <th colspan="2">ID Client</th>
                    <th colspan="3">OPTIONS</th>

                </thead>
                <?php
                foreach ($liste as $commande) {
                    if (isset($commande)) {
                        ?>

                        <tr>
                            <td><?php echo $commande[0]; ?></td>
                            <td></td>
                            <td><?php echo $commande[1]; ?></td>
                            <td></td>
                            <td><?php echo $commande[2]; ?></td>
                            <td></td>
                            <td><?php echo $commande[4]; ?></td>
                            <td></td>
                            <td><?php echo $commande[3]; ?></td>
                            <td></td>
                            <td>
                            <form action="GSLigneCommande.php" method="POST">
                                <input type="hidden" name="idcmd" value="<?php echo  $commande[0]; ?>" />
                                <input type="submit" class="btn btn-primary" name ="ActionCommande" value="Afficher les Details" />
                            </form>
                            </td>
                            <td>
                            <form action="editcommande.php" method="POST">
                                <input type="hidden" name="idcmd" value="<?php echo  $commande[0]; ?>" />
                                <input type="hidden" name="Date" value="<?php echo  $commande[1]; ?>" />
                                <input type="hidden" name="Type" value="<?php echo  $commande[2]; ?>" />
                                <input type="hidden" name="CommandeClient" value="<?php echo  $commande[3]; ?>" />
                                <input type="hidden" name="Paye" value="<?php echo  $commande[4]; ?>" />
                                <input type="submit" class="btn btn-success" name ="ActionCommande" value="Modifier" />
                            </form>
                            </td>
                            <td>
                            <form action="../controls/controls.php" method="POST">
                                <input type="hidden" name="CommandeClient" value="<?php echo  $commande[0]; ?>" />
                                <input type="submit" class="btn btn-danger" name ="ActionCommande" value="delete" />
                            </form>
                            </td>
                        </tr>

                <?php
                    }
                }
                ?>

            </table>
        </div>
        <?php
    if(empty($liste))
    {
        echo "<h4>aucun commande </h4>";
    }
    ?>
    <a  href="listeClient.php"  >Retourner a la liste des clients</a>

    </div>

</body>

</html>