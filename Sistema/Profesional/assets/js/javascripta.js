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


    $(document).on("ready", function () {

        enviarDatos();
    });

function enviarDatos() {
    $("#guardar").click(function () {
        $.ajax({
            type: "POST",
            url: "producto.php",
            data: 'fecha=' + $("#fecha").val() + '&hora=' + $(" #hora").val() + '&id_paciente'+ $("#idusu").val(),
            success: function (response) {
                if (response) {
                    window.alert(data)            
                    window.location.href = "../administrarpacientes.php";
                }

            }


        });


    });
}











