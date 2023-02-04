<?php

class ventas extends Dbh{

    protected function getVentas(){

        $queryProyectos = $this->connect()->prepare(
            
            'SELECT
            Proyectos.idProyectos,
            Venta.`Fecha Inicio`,
            Venta.`Fecha Fin`,
            Clientes.Nombre,
            Clientes.Apellido,
            CONCAT(Clientes.Nombre, " ", Clientes.Apellido) AS Cliente,
            Venta.`Precio`,
            Venta.`Costo`,
            Venta.Descuento,
            Venta.Estado,
            Venta.Moneda,
            "Proyecto" AS Tipo
            FROM Clientes
            JOIN Venta
            ON Clientes.idClientes = Venta.Clientes_idClientes
            JOIN Proyectos
            ON Venta.idVenta = Proyectos.Venta_idVenta;'
            
        );

        if(!$queryProyectos->execute()){
            $$queryProyectos = null;
            echo "Error de Conexion con la Base de Datos";
            exit();
        }        

        $proyectos = $queryProyectos->fetchAll(PDO::FETCH_ASSOC);
        
        $querySubscripciones = $this->connect()->prepare(
            
            'SELECT
            Subscripciones.`idSubscripcion`,
            Venta.`Fecha Inicio`,
            Venta.`Fecha Fin`,
            Clientes.Nombre,
            Clientes.Apellido,
            CONCAT(Clientes.Nombre, " ", Clientes.Apellido) AS Cliente,
            Venta.`Precio`,
            Venta.`Costo`,
            Venta.Descuento,
            Venta.Estado,
            Venta.Moneda,
            "Subscripcion" AS Tipo
            FROM Clientes
            JOIN Venta
            ON Clientes.idClientes = Venta.Clientes_idClientes
            JOIN Subscripciones
            ON Venta.idVenta = Subscripciones.Venta_idVenta;'
            
        );

        if(!$querySubscripciones->execute()){
            $querySubscripciones = null;
            print "Error de Conexion con la Base de Datos";
            exit();
        }

        $subscripciones = $querySubscripciones->fetchAll(PDO::FETCH_ASSOC);

        $ventas = array_merge($proyectos, $subscripciones);
        return $ventas;

        }
}
?>