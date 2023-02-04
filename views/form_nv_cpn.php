<div id="nv_cpn">
            <!-- 3ra fila -->
            <div class="row">
                <div class="col-md-6">
                    <label for="nv_nombrepn">Nombre</label>
                    <input class="form-control" type="text" id="nv_nombrepn">
                </div>
                <div class="col-md-6">
                    <label for="nv_apellidopn">Apellido</label>
                    <input class="form-control" type="text" id="nv_apellidopn">
                </div>
            </div>
            <br>
            <!-- 4ta fila -->
            <div class="row">
                <div class="col-md-4">
                    <label for="nv_telefonopn">Telefono</label>
                    <input class="form-control" type="text" id="nv_telefonopn">
                </div>
                <div class="col-md-4">
                    <label for="nv_documentopn">Documento</label>
                    <input class="form-control" type="text" id="nv_documentopn">
                </div>
                <div class="col-md-4">
                    <label for="nv_emailpn">E-mail</label>
                    <input class="form-control" type="email" id="nv_emailpn">
                </div>
            </div>
            <br>
            <!-- 5ta fila -->
            <div class="row">
                <div class="col-md-6">
                    <label for="nv_direccionpn">Direccion</label>
                    <input class="form-control" type="text" id="nv_direccionpn">
                </div>
                <div class="col-md-3">
                    <label for="nv_paispn">Pais</label>
                    <input class="form-control" type="text" id="nv_paispn">
                </div>
                <div class="col-md-3">
                    <label for="nv_leadpn">Origen de Lead</label>
                    <select class="form-control" name="nv_lead" id="nv_leadpn">
                        <option value="fb">Facebook</option>
                        <option value="ig">Instagram</option>
                        <option value="ref">Referencia</option>
                        <option value="ga">Google Ads</option>
                        <option value="otr">Otro</option>
                    </select>
                </div>
            </div>
            <br>
            <!-- 6ta fila -->
            <div class="row">
                <div class="col">
                    <label for="nv_comentariopn">Comentario</label>
                    <input class="form-control" type="text" id="nv_comentariopn">
                </div>
            </div>
            <br>
            <?php include("btns_nv.php") ?>
        </div>