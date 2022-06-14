function validarficha(accion) {

    document.form1.accion.value = accion;
    if (accion != "Cancelar") {
        if (accion != "Modificar") {
            if (document.form1.Rut.value == "") {
                alert("Debe Ingresar el Rut");
                return false;
            }
        }
        if (document.form1.name.value == "") {
            alert("Debe Ingresar un Nombre");
            return false;
        }
        if (document.form1.app.value == "") {
            alert("Debe Ingresar un Apellido");
            return false;
        }
        if (document.form1.fechanacimiento.value == "") {
            alert("Debe Ingresar Fecha de Nacimiento");
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
        if (document.form1.sexo.value == "") {
            alert("Debe Ingresar el Sexo");
            return false;
        }
        if (document.form1.telefono.value == "") {
            alert("Debe Ingresar el Telefono");
            return false;
        }
        if (accion != "Modificar") {
            if (document.form1.pass.value == "") {
                alert("Debe Ingresar la clave");
                return false;
            }
        }
        if (accion == "Modificar") {
            if (document.form1.frmestado.value == 3) {
                alert("Debe Ingresar el Estado del usuario");
                return false;
            }
        }
    }
    document.form1.submit();
}