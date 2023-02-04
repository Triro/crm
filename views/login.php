<?PHP

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <?php include("../controllers/heads.php") ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class='col-3'></div>
                <div class='col-6'>
                    <h1 class='loginH1'>Login</h1>
                    <br><br>
                    <form action="../controllers/controller_login.php" method="post">
                        <div class="form-group">
                            <label for="uid">Usuario:</label>
                            <input type="text" class="form-control" id="uid" name='uid' aria-describedby="uid" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Contraseña:</label>
                            <input type="password" id="pwd" name="pwd" placeholder="Contraseña" class="form-control">
                        </div>
                        <button type="submit" name='loginbtn' class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
                <div class='col-3'></div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
