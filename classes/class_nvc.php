<?php

class nvc extends Dbh
{

    protected function getPN()
    {

        $queryPN = $this->connect()->prepare(

            'SELECT Clientes.`Nombre`, Clientes.`Apellido`, Clientes.`idClientes`
            FROM Clientes
            INNER JOIN tipo_cliente ON Clientes.Tipo_Cliente_idTipo_Cliente = tipo_cliente.idTipo_Cliente
            WHERE tipo_cliente.`Tipo` = "Persona Natural"'
        );

        if (!$queryPN->execute()) {
            $queryPN = null;
            echo "Error de Conexion con la Base de Datos";
            exit();
        }

        $PN =  $queryPN->fetchAll(PDO::FETCH_ASSOC);
        return $PN;
    }

    protected function getPJ()
    {

        $queryPJ = $this->connect()->prepare(

            'SELECT Clientes.`Empresa`
            FROM Clientes
            INNER JOIN tipo_cliente ON Clientes.Tipo_Cliente_idTipo_Cliente = tipo_cliente.idTipo_Cliente
            WHERE tipo_cliente.`Tipo` = "Persona Juridica"'

        );

        if (!$queryPJ->execute()) {
            $queryPJ = null;
            echo "Error de Conexion con la Base de Datos";
            exit();
        }

        $PJ =  $queryPJ->fetchAll(PDO::FETCH_ASSOC);
        return $PJ;

    }

    protected function getCliente($id, $tipo) {
        $queryFC = $this->connect()->prepare(
            'SELECT * FROM Clientes WHERE idClientes = ?'
        );

        if (!$queryFC->execute(array($id))) {
            $queryFC = null;
            echo "Error de Conexion con la Base de Datos";
            exit();
        }
    
        $rows = $queryFC->fetchAll(PDO::FETCH_ASSOC);
        if (count($rows) == 0) {
            echo "No client data found with the given ID.";
            exit();
        }
        $row = $rows[0];
    
        switch ($tipo) {
            case 1:
                $row['Tipo_Cliente_idTipo_Cliente'] = "Persona Natural";
                break;
            case 2:
                $row['Tipo_Cliente_idTipo_Cliente'] = "Persona Juridica";
                break;
            default:
                break;
        }
    
        $queryFO = $this->connect()->prepare(
            'SELECT * FROM `origen de leads` WHERE `idOrigen de Leads` = ?'
        );
        
        if (!$queryFO->execute(array($row['Origen de Leads_idOrigen de Leads']))) {
            $queryFO = null;
            echo "Error de Conexion con la Base de Datos";
            exit();
        }
  
        $origen = $queryFO->fetchAll(PDO::FETCH_ASSOC);
        if (count($origen) == 0) {
            echo "No origin data found for the given ID.";
            exit();
        }
        $origen = $origen[0];
    
        $row['Origen de Leads_idOrigen de Leads'] = $origen['Origen'];

        return $row;
    }
    
}
?>