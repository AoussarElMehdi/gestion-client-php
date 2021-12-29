<?php 
$idClient=$_POST["idcl"];

?>
<!doctype>
<html>

<head>
<script src="../bootstrap_4.1.0_dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap_4.1.0_dist/css/bootstrap.min.css">
</head>

<body>
    <form action="../controls/controls.php" method="POST">
        <input type="text" name="Date" class="" required />
        <input type="text" name="Type" class="" required />
        <input type="text" name="Paye" class="" required />
        <input type="hidden" name="id_Client" value="<?php echo $idClient?>" class="" required />
        <input type="submit" name="ActionCommande" class="btn btn-success" value="Ajouter" />
    </form>


</body>

</html>