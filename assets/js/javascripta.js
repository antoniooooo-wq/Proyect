

$(document).ready(function () {
    $('#ContenedorJquery').hide();
    $('#noesta').hide();
    $('#siesta').hide();

    $('#fecha').blur(function () {
        fecha();
    });
    $("#guardar").click(function () {
        enviarDatos();
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


function enviarDatos() {
        $.ajax({
            type: "POST",
            url: "producto.php",
            data: 'fecha=' + $("#fecha").val() + '&hora=' + $(" #hora").val() + '&id_paciente='+ $("#idusu").val(),
            success: function (response) {          
                if(response==1)
                {           
                

                  alert("Hora Registrada Exitosamente");
                   window.location.href = "https://rpino.cl/Prueba/Sistema/principaal.php";
                }
          }
        });
}











