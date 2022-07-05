$(document).ready(function () {
    $('#ContenedorJquery').hide();
    $('#noesta').hide();
    $('#siesta').hide();

    $('#fecha').blur(function () {
        fecha();
    });

});

function fecha() {
    $.ajax({
        type: "POST",
        url: 'fechas.php',
        data: 'op=1&fecha=' + $('#fecha').val(),
        success: function (response) {
            $("#hora").html(response);
        }
    });
}



function validarDatos() {

    document.formFechas.guardar.value = guardar;

    if (document.formFechas.fecha.value == "") {
        alert("Debe seleccionar una Fecha");
        return false;
    }
    if (document.formFechas.hora.value == "null") {
        alert("Debe seleccionar una Hora");
        return false;
    }

}

    $(document).on("ready", function () {

        enviarDatos();
    });

function enviarDatos() {
    $("#guardar").click(function () {
        $.ajax({
            type: "POST",
            url: "producto.php",
            data: 'fecha=' + $("#fecha").val() + '&hora=' + $("#hora").val() + '&idusu=' + $("#idusu").val(),
            success: function (response) {
                if (response) {
                    window.alert("Hora registrada Exitosamente")
                    window.location.href = "../Sistema/principaal.php";
                }

            }


        });


    });
}











