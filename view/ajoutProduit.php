<!doctype>
<html>

<head>
<script src="../bootstrap_4.1.0_dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap_4.1.0_dist/css/bootstrap.min.css">
</head>

<body class="modal-body">
    <form action="../controls/controls.php" method="POST" class="form-group">
    <div class="form-group">
        <label >Designation : </label>     <input type="text" name="nom" class="" required /><br><br>
        <label >Q-Stock &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>     <input type="text" name="qstock" class="" required /><br><br>
        <label >Prix &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>     <input type="text" name="prix" class="" required /><br><br>
        <input type="submit" name="ActionProduit" class="btn btn-success" value="Ajouter" />
        </div>
    </form>


</body>

</html>