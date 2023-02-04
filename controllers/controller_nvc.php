<?php

    //Instance Controller
    include "../classes/class_db.php";
    include "../classes/class_nvc.php";
    include "../classes/class_nvc_controller.php";

    //Insertar los Selects
    $selectOption = new nvcController();
        
?>

<div class="col" id="nvc_filtro_pn">
    <div class="form-group">
        <label for="nvc_filtro_pn">Lista de Clientes: Persona Natural</label>
        <select class="form-control" name="nvc_select_pn" id="nvc_select_pn" title="nvc_select_pn" onchange="sendAjaxRequestpn(this.value)">
            <option value="0">Seleccione un Cliente Existente</option>
            <?php
                $selectOption->fillOptionPN();
            ?>
        </select>
    </div>
</div>
<div class="col" id="nvc_filtro_pj">
    <div class="form-group">
        <label for="nvc_filtro_pj">Lista de Clientes: Persona Juridica</label>
        <select class="form-control" name="nvc_select_pj" id="nvc_select_pj" title="nvc_select_pj" onchange="sendAjaxRequestpj(this.value)">
            <option value="0">Seleccione un Cliente Existente</option>
            <?php
                $selectOption->fillOptionPJ();
            ?>
        </select>
    </div>
</div>


