<?php require("../controllers/controller_session.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../controllers/heads.php")?>
    <title>Ventas</title>
</head>
<body>
<?php include("../controllers/sidebar.php") ?>

        <h1>Ventas</h1>
        </div>
        <div class='container-fluid'>
        <div class="busquedaFiltro row justify-content-between">
        <form class="col-md-6 align-self-center">
            <input class="form-control" type="text" id="searchTV" onkeyup="searchTableVentas()" placeholder="Buscar...">
        </form>
        <div class="col-md-2 align-self-center">
            <a href="nueva_venta_c.php"><button type="button" class="btn btn-success">Nueva Venta</button></a>
        </div>
    </div>
        <div class="table-responsive">
        <table class="table table-hover" id="tablaVentas">
            <thead>
                <tr>
                    <th scope="col"><a href=# onclick="sortTable(0)">Id</a></th>
                    <th scope="col"><a href=# onclick="sortTable(1)">Fecha Inicio</a></th>
                    <th scope="col"><a href=# onclick="sortTable(2)">Fecha Fin</a></th>
                    <th scope="col"><a href=# onclick="sortTable(3)">Cliente</a></th>
                    <th scope="col"><a href=# onclick="sortTable(4)">Estado</a></th>
                    <th scope="col"><a href=# onclick="sortTable(5)">Precio</a></th>
                    <th scope="col"><a href=# onclick="sortTable(6)">Costo</a></th>
                    <th scope="col"><a href=# onclick="sortTable(7)">Descuento</a></th>
                    <th scope="col"><a href=# onclick="sortTable(8)">Moneda</a></th>
                    <th scope="col"><a href=# onclick="sortTable(9)">Tipo</a></th>
                </tr>
            </thead>
            <tbody>
            <?php include("../controllers/controller_ventas.php") ?>
        </div>
    </div>
<?php include("../controllers/scripts.php") ?>
</body>
</html>