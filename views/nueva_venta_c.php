<?php require("../controllers/controller_session.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("../controllers/heads.php")?>
    <title>Nueva Venta</title>
</head>
<body>
<?php include("../controllers/sidebar.php") ?>
    <h1>Nueva Venta</h1>
</div>
    <div>
        <div class='container'>
            <!-- Fila 0 -->
            <div class="row">
                <div class="col">
                    <h2>Cliente</h2>
                </div>
            </div>
            <br>
            <!-- 1ra fila -->
            <div class="row">   
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nvc_check" id="nvc_check_pn" value="nvc_option1">
                        <label class="form-check-label" for="nvc_check_pn">Persona Natural</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nvc_check" id="nvc_check_pj" value="nvc_option2">
                        <label class="form-check-label" for="nvc_check_pj">Persona Juridica</label>
                    </div>
                </div>
                <?php include("..\controllers\controller_nvc.php") ?>
            </div>
            <!-- 2da fila -->
            <br><br>
            <!-- Contenido Dinamico -->
            <?php include("form_nv_cpn.php") ?>
            <?php include("form_nv_cpj.php") ?>
        </div>
    </div>
<?php include("../controllers/scripts.php") ?>
</body>
</html>  