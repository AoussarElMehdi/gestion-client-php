<!doctype>
<html>
<?php
require_once("../model/gestionClient.php");
require_once("../model/classes/Client.php");
$GC=new gestionClient();
$liste=$GC->getall();
?>

<head>
    <title>Liste Client</title>
    <script src="../bootstrap_4.1.0_dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap_4.1.0_dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
    <a href="ajoutClient.php" class="btn-group-vertical">Ajouter un Client</a>
        <div class="row justify-content-center">            
            <table class="table table-hover">

                <thead class="table-info">

                    <th colspan="2">ID</th>
                    <th colspan="2">NOM</th>
                    <th colspan="2">ADRESSE</th>
                    <th colspan="2">TEL</th>
                    <th colspan="3">OPTIONS</th>

                </thead>
                <?php
		foreach($liste as $client)
		{
			if(isset($client))
			{
		?>

                <tr>
                    <td><?php echo $client[0]; ?></td>
                    <td></td>
                    <td><?php echo $client[1]; ?></td>
                    <td></td>
                    <td><?php echo $client[2]; ?></td>
                    <td></td>
                    <td><?php echo $client[3]; ?></td>
                    <td></td>
                    <td>
                    <form action="CommandeClient.php" method="POST">
                        <input type="hidden" name="CommandeClient" value="<?php echo $client[0];?>" />
                        <input type="hidden" name="nom" value="<?php echo $client[1];?>" />
                        <input type="hidden" name="adr" value="<?php echo $client[2];?>" />
                        <input type="hidden" name="tel" value="<?php echo $client[3];?>" />
                        <input type="submit" class="btn btn-primary" value="Afficher les commandes" />
                    </form>
                    </td>
                    <td>
                    <form action="editClient.php" method="POST">
                        <input type="hidden" name="idc" value="<?php echo $client[0];?>" />
                        <input type="hidden" name="nom" value="<?php echo $client[1];?>" />
                        <input type="hidden" name="adr" value="<?php echo $client[2];?>" />
                        <input type="hidden" name="tel" value="<?php echo $client[3];?>" />
                        <input type="submit" class="btn btn-success" value="editer" />
                    </form>
                    </td>
                    <td>
                    <form action="../controls/controls.php" method="POST">
                        <input type="hidden" name="ActionClient" value="delete" />
                        <input type="hidden" name="idcl" value="<?php echo $client[0];?>" />
                        <input type="submit" class="btn btn-danger" value="delete" />
                    </form>
                    </td>
                    <td></td>
                    
                </tr>

                <?php	
		}}
		?>

            </table>
        </div>

    </div>

</body>

</html>