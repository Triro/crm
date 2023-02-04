<?php

class ventasController extends ventas
{

    public function __construct()
    {
    }

    public function createTabla()
    {
        $tabla = $this->getVentas();

        foreach($tabla as $fila) {
            $cliente = $fila['Nombre'] . ' ' . $fila['Apellido'];
            $tipo = array_key_exists('idProyectos', $fila) ? 'Proyecto' : 'Subscripcion';
            echo '<tr>
                <td><a href="venta.php">'.$fila['idProyectos'].'</a></td>
                <td>'.$fila['Fecha Inicio'].'</td>
                <td>'.$fila['Fecha Fin'].'</td>
                <td><a href="cliente.php">'.$cliente.'</a></td>
                <td><a href="venta.php">'.$fila['Estado'].'</a></td>
                <td>'.$fila['Precio Proyectos'].'</td>
                <td>'.$fila['Costo Proyectos'].'</td>
                <td>'.$fila['Descuento'].'</td>
                <td>'.$fila['Moneda'].'</td>
                <td>'.$tipo.'</td>
            </tr>';
        }
        echo '</table>';
    }
}
?>