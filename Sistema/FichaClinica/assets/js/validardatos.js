function validarficha(accion) {

    document.form_ficha.accion.value = accion;
    if (accion != "Cancelar") { }
    document.form_ficha.submit();
}

function validarpreingreso(accion) {

    document.form_preingreso.accion.value = accion;
    if (accion != "Cancelar") {

        if (document.form_preingreso.obss.value == "") {
            alert("Campo Obligatorio (Observaciones)");
            return false;
        }

        if (document.form_preingreso.diag.value == "") {
            alert("Campo Obligatorio (Diagnóstico)");
            return false;
        }
        if (document.form_preingreso.tto.value == "") {
            alert("Campo Obligatorio (Tratamiento)");
            return false;
        }
        if (document.form_preingreso.indic.value == "") {
            alert("Campo Obligatorio (Indicaciones)");
            return false;
        }
    }
    document.form_preingreso.submit();
}

function validarpremodificar(accion) {

    document.form_preingresoo.accion.value = accion;
    if (accion != "Cancelar") {
        if (accion != "Cancelar") {

            if (document.form_preingresoo.obss.value == "") {
                alert("Campo Obligatorio (Observaciones)");
                return false;
            }
    
            if (document.form_preingresoo.diag.value == "") {
                alert("Campo Obligatorio (Diagnóstico)");
                return false;
            }
            if (document.form_preingresoo.tto.value == "") {
                alert("Campo Obligatorio (Tratamiento)");
                return false;
            }
            if (document.form_preingresoo.indic.value == "") {
                alert("Campo Obligatorio (Indicaciones)");
                return false;
            }
        }
    }
    document.form_preingresoo.submit();
}