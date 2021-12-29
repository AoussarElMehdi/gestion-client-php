<?php
require_once("../model/gestionClient.php");
require_once("../model/gestionCommande.php");
require_once("../model/classes/Client.php");
require_once("../model/classes/Commande.php");
$GC=new gestionClient();
$GCMD = new  gestionCommande();
$ListeCMD = array();
$liste=$GC->getall();
if(isset($_POST["action"])){
if($_POST["action"] == 'select'){
    $id = $_POST["id"];
    $CMD = $GCMD->getCommandeByClient($id);
    foreach($CMD as $ligne){
    array_push($ListeCMD,$ligne[0]);
    }
    echo json_encode($ListeCMD);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>choisie Client :</td>
            <td>
            <select id="Client">
            <?php foreach($liste as $client){ ?>
            <option value="<?php echo  $client[0]; ?>"><?php echo $client[0]; ?></option>
            <?php } ?>
            </select>
            </td>
            <td><input type="button" value="OK" onclick="OKClick()"></td>
        </tr>

        <tr>
        <td>command</td>
        <td><select  id="Commande"></select></td>
        </tr>
    </table>
</body>
<script src="../bootstrap_4.1.0_dist/dependencies/jquery-3.3.1.js"></script>
<script src="ajax.js"></script>
</html>