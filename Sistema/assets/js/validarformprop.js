function validarprop() {
    var ima = document.getElementById("imagen[]").files;
    for (x = 0; x < ima.length; x++) {

        if (ima[x].type != "image/png" && ima[x].type != "image/jpg" && ima[x].type != "image/jpeg") {

            alert("Debe ingresar Solo imagenes en formato PNG o JPG", "Error");
            ima.focus();
            return false;
        }
    }
    document.prop.submit();
}