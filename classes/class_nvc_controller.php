<?php

class nvcController extends nvc
{

    public function __construct()
    {
    }

    public function fillOptionPN()
    {
        $results = $this->getPN(); 
        foreach($results as $row) {
            echo "<option value='" . $row['idClientes'] . "'>".$row['Nombre']." ".$row['Apellido']."</option>";
          }
    }

    public function fillOptionPJ()
    {
        $results = $this->getPJ(); 
        foreach($results as $row) {
            echo "<option value='" . $row['idClientes'] . "'>".$row['Empresa']."</option>";
          }
    }

}

class formPN extends nvc{
    public function __construct(){
    }

    public function fillPN($id){
        $personaData = $this->getCliente($id, 1);

        return $personaData;
    }

}

class formPJ extends nvc{
    public function __construct(){
    }

    public function fillPJ($id){
        $personaData = $this->getCliente($id, 2);

        return $personaData;
    }

}

?>