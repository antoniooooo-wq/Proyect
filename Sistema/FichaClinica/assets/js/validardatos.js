function validarficha(accion) {

    document.form_ficha.accion.value = accion;
    if (accion != "Cancelar") {
        if (accion != "Modificar") {
            
        }
    }
    document.form_ficha.submit();
}

function validarpreingreso(accion){

    document.form_preingreso.accion.value = accion;
    if (accion != "Cancelar") {
        /*
        if (document.form_preingreso.frec_card.value <="0") {
            alert("Número Inválido (Frecuencia Cardiaca)");
           return false;
        }
        
        if (document.form_preingreso.frec_resp.value <="0") {
            alert("Número Inválido (Frecuencia Respiratoria)");
            return false;
        }
        if (document.form_preingreso.sist.value <="0") {
            alert("Número Inválido (Sistole)");
            return false;
        }
        if (document.form_preingreso.diast.value <"0") {
            alert("Número Inválido (Diastole)");
            return false;
        }
        if (document.form_preingreso.temp.value <"0") {
            alert("Número Inválido (T°)");
            return false;
        }
        if (document.form_preingreso.porc_satu.value <"0") {
            alert("Número Inválido (Saturación)");
            return false;
        }
        if (document.form_preingreso.glu.value <"0") {
            alert("Número Inválido (Glucosa)");
            return false;
        }
        if (document.form_preingreso.rotu.value <"0") {
            alert("Número Inválido (Rotuliano)");
            return false;
        }
        if (document.form_preingreso.pulso_pe.value <"0") {
            alert("Número Inválido (Pulso Pedio)");
            return false;
        }
        if (document.form_preingreso.mono.value <"0") {
            alert("Número Inválido (Monofila)");
            return false;
        }
        if (document.form_preingreso.punsion.value <"0") {
            alert("Número Inválido (Punsión)");
            return false;
        }
        if (document.form_preingreso.foc.value <"0") {
            alert("Número Inválido (Frio/Calor)");
            return false;
        }
        if (document.form_preingreso.diapa.value <"0") {
            alert("Número Inválido (Diapason)");
            return false;
        }
*/
       
    }
    document.form_preingreso.submit();
}