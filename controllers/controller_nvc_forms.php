<?php

    //Instance Controller
    require_once "../classes/class_db.php";
    require_once "../classes/class_nvc.php";
    require_once "../classes/class_nvc_controller.php";
    $nvc = new nvcController();
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];

if ($tipo == 1) {

    $formpn = new formPN();
    $personaData = $formpn->fillPN($id);
    header('Content-Type: application/json');
    echo json_encode($personaData);
}   

if ($tipo == 2) {
    
    $formpj = new formPJ();
    $personaData = $formpj->fillPJ($id);
    header('Content-Type: application/json');
    echo json_encode($personaData);
} 

        
?>