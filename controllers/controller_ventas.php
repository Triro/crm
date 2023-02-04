    
        <?php
        //Instance Controller
        include "../classes/class_db.php";
        include "../classes/class_ventas.php";
        include "../classes/class_ventas_controller.php";

        $ventas = new ventasController();

        //Construccion de la Tabla
        
        $ventas->createTabla();
        
        ?>

</div>