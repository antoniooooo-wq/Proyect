function validarpaciente(accion) {

    document.form1.accion.value = accion;
    if ((accion != "Cancelar")) {
        
        if (document.form1.name.value == "") {
            alert("Debe Ingresar un Nombre");
            return false;
        }
        if (document.form1.app.value == "") {
            alert("Debe Ingresar un Apellido");
            return false;
        }
        if (document.form1.correo.value == "") {
            alert("Debe Ingresar el Correo");
            return false;
        }
        if (document.form1.direccion.value == "") {
            alert("Debe Ingresar una Direccion");
            return false;
        }
        if (document.form1.telefono.value == "") {
            alert("Debe Ingresar el Telefono");
            return false;
        }
        
    }
    document.form1.submit();
}