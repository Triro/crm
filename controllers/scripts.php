<!-- Bootstrap -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<!-- JQuery -->

<script src="../js/jquery-3.6.1.min.js"></script>

<!-- Mas Bootstrap -->

<script src="../js/bootstrap.bundle.min.js"></script>

<!-- NVC show/hide fields -->

<script>
      $(document).ready(function() {
        $(':radio').change(function() {
          if ($(this).val() === 'nvc_option1') {
            //filtro
            $('#nvc_filtro_pn').show();
            $('#nvc_filtro_pj').hide();
            //encuesta
            $('#nv_cpn').show();
            $('#nv_cpj').hide();

          } else if ($(this).val() === 'nvc_option2') {
            //filtro
            $('#nvc_filtro_pj').show();
            $('#nvc_filtro_pn').hide();

            //encuesta
            $('#nv_cpj').show();
            $('#nv_cpn').hide();

          }
        });
      });
</script>

<!-- NVC fill fields PN -->

<script>
    function sendAjaxRequestpn(id) {
    $.ajax({
        type: 'POST',
        url: '../controllers/controller_nvc_forms.php',
        data: {id:id, tipo:1},
        success: function(response) {
        // parse the JSON response from the server
        var personaNaturalDetails = response
        console.log(response);

        // fill the form fields with the received data
        $('#nv_nombrepn').val(personaNaturalDetails["Nombre"]);
        $('#nv_apellidopn').val(personaNaturalDetails["Apellido"]);
        $('#nv_telefonopn').val(personaNaturalDetails["Telefono"]);
        $('#nv_documentopn').val(personaNaturalDetails["Documento"]);
        $('#nv_emailpn').val(personaNaturalDetails["E-mail"]);
        $('#nv_direccionpn').val(personaNaturalDetails["Direccion"]);
        $('#nv_paispn').val(personaNaturalDetails["Pais"]);
        $('#nv_comentariopn').val(personaNaturalDetails["Comentario"]);

        $("#nv_leadpn option").filter(function() {
            return $(this).text() === personaNaturalDetails["Origen de Leads_idOrigen de Leads"];
        }).prop('selected', true);

      }
    });
  };

</script>


<script>
    function sendAjaxRequestpj(id) {
    $.ajax({
        type: 'POST',
        url: '../controllers/controller_nvc_forms.php',
        data: {id:id, tipo:1},
        success: function(response) {
        // parse the JSON response from the server
        var personaNaturalDetails = response
        console.log(response);

        // fill the form fields with the received data
        $('#nv_nombrepj').val(personaNaturalDetails["Nombre"]);
        $('#nv_apellidopj').val(personaNaturalDetails["Apellido"]);
        $('#nv_telefonopj').val(personaNaturalDetails["Telefono"]);
        $('#nv_documentopj').val(personaNaturalDetails["Documento"]);
        $('#nv_emailpj').val(personaNaturalDetails["E-mail"]);
        $('#nv_direccionpj').val(personaNaturalDetails["Direccion"]);
        $('#nv_paispj').val(personaNaturalDetails["Pais"]);
        $('#nv_comentariopj').val(personaNaturalDetails["Comentario"]);
        $('#nv_cargopj').val(personaNaturalDetails["Comentario"]);
        $('#nv_empresapj').val(personaNaturalDetails["Comentario"]);

        $("#nv_leadpj option").filter(function() {
            return $(this).text() === personaNaturalDetails["Origen de Leads_idOrigen de Leads"];
        }).prop('selected', true);

      }
    });
  };

</script>