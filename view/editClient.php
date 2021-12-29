<?php
//require_once ("listeClient.php");

$id=$_POST["idc"];
$nom=$_POST["nom"];
$adresse=$_POST["adr"];
$tel=$_POST["tel"];
		
?>
<!doctype>
<html>

<head>

</head>

<body>
    <form action="../controls/controls.php" method="POST">
        <input type="text" name="id" class="" value="<?php echo $id ?>" required />
        <input type="text" name="nom" class="" value="<?php echo $nom ?>" required />
        <input type="text" name="adresse" class="" value="<?php echo $adresse ?>" required />
        <input type="text" name="tel" class="" value="<?php echo $tel ?>" required />
        <input type="submit" name="ActionClient" class="" value="Modifier" />
    </form>


</body>

</html>