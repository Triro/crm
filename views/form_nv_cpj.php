<div id="nv_cpj">
            <!-- 3ra fila -->
            <div class="row">
                <div class="col-md-6">
                    <label for="nv_Empresapj">Empresa</label>
                    <input class="form-control" type="text" id="nv_empresapj">
                </div>
                <div class="col-md-6">
                    <label for="nv_cargopj">Cargo</label>
                    <input class="form-control" type="text" id="nv_cargopj">
                </div>
            </div>
            <br>
            <!-- 4ta fila -->
            <div class="row">
                <div class="col-md-6">
                    <label for="nv_nombrepj">Nombre</label>
                    <input class="form-control" type="text" id="nv_nombrepj">
                </div>
                <div class="col-md-6">
                    <label for="nv_apellidopj">Apellido</label>
                    <input class="form-control" type="text" id="nv_apellidopj">
                </div>
            </div>
            <br>
            <!-- 5ta fila -->
            <div class="row">
                <div class="col-md-4">
                    <label for="nv_telefonopj">Telefono</label>
                    <input class="form-control" type="text" id="nv_telefonopj">
                </div>
                <div class="col-md-4">
                    <label for="nv_documentopj">Documento</label>
                    <input class="form-control" type="text" id="nv_documentopj">
                </div>
                <div class="col-md-4">
                    <label for="nv_emailpj">E-mail</label>
                    <input class="form-control" type="email" id="nv_emailpj">
                </div>
            </div>
            <br>
            <!-- 6ta fila -->
            <div class="row">
                <div class="col-md-6">
                    <label for="nv_direccionpj">Direccion</label>
                    <input class="form-control" type="text" id="nv_direccionpj">
                </div>
                <div class="col-md-3">
                    <label for="nv_paispj">Pais</label>
                    <input class="form-control" type="text" id="nv_paispj">
                </div>
                <div class="col-md-3">
                    <label for="nv_leadpj">Origen de Lead</label>
                    <select class="form-control" name="nv_leadpj" id="nv_leadpj">
                        <option value="fb">Facebook</option>
                        <option value="ig">Instagram</option>
                        <option value="ref">Referencia</option>
                        <option value="ga">Google Ads</option>
                        <option value="otr">Otro</option>
                    </select>
                </div>
            </div>
            <br>
            <!-- 7ta fila -->
            <div class="row">
                <div class="col">
                    <label for="nv_comentariopj">Comentario</label>
                    <textarea class="form-control" name="nv_comentariopj" id="nv_comentariopj" rows="6"></textarea>
                </div>
            </div>
            <br>
            <?php include("btns_nv.php") ?>
</div>