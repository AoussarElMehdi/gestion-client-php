<?php 
$idClient=$_POST["CommandeClient"];
$idcmd=$_POST["idcmd"];
$Date=$_POST["Date"];
$type=$_POST["Type"];
$paye=$_POST["Paye"];
?>
<!doctype>
<html>

<head>

</head>

<body>
    <form action="../controls/controls.php" method="POST">
        <input type="hidden" name="CommandeClient" value="<?php echo $idClient?>" class="" required  /> 
        <input type="text" name="id" value="<?php echo $idcmd?>" class="" required  /> 
        <input type="text" name="Date" value="<?php echo $Date?>" class="" required />
        <input type="text" name="Type" value="<?php echo $type?>" class="" required />
        <input type="text" name="Payee" value="<?php echo $paye?>" class="" required />
        <input type="submit" name="ActionCommande" class="" value="Modifier" />
    </form>


</body>

</html>