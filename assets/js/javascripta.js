$(document).ready(function() {
    $('#ContenedorJquery').hide();
    $('#noesta').hide();
    $('#siesta').hide();
    
    $('#fecha').blur(function(){
        fecha();
    });
    
 });

 function fecha()
 {
    $.ajax({
        type: "POST",
        url: 'fechas.php',
        data: 'op=1&fecha='+$('#fecha').val(),
        success: function(response)
        {
            $("#horas").html(response);
       }
   });
 }
 
 function Ingresar(accion) {

    document.formFechas.accion.value = accion;
    if ((accion=="Ingresar")) {
        if (document.formFechas.fecha.value == "") {
            alert("Debe Ingresar una dia");
            return false;
        }
        if (document.formFechas.hora.value == "") {
            alert("Debe Ingresar una hora");
            return false;
        }
        
    }
    
    document.formFechas.submit();
}
 

 
