<?php
//require_once ("listeClient.php");

$id=$_POST["idP"];
$nom=$_POST["nom"];
$qte=$_POST["qstock"];
$prix=$_POST["prix"];
		
?>
<!doctype>
<html>

<head>

</head>

<body>
    <form action="../controls/controls.php" method="POST">
        <input type="text" name="idP" class="" value="<?php echo $id ?>" required />
        <input type="text" name="nom" class="" value="<?php echo $nom ?>" required />
        <input type="text" name="qstock" class="" value="<?php echo $qte ?>" required />
        <input type="text" name="prix" class="" value="<?php echo $prix ?>" required />
        <input type="submit" name="ActionProduit" class="" value="Modifier" />
    </form>


</body>

</html>