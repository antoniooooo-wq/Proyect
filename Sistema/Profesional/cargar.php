<?php
include("../../functions/setup.php");
?>
<!DOCTYPE html>
<html>
<title>Consulta Inteligente</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/.bundlbootstrape.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>

<div id="frmtxt">
<div class="card">
        <div class="card-header">Busqueda</div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="lname" class="fontforusuario">Palabra a buscar :</label>
                    <input type="text" class="form-control" id="txt" name="txt">
                </div> 
            </div>
        </div>
    </div>
</div>
<hr>
<div id="grilla2">


</div>

<script>
$(document).ready(function() {
     muestratodos();

     $("#txt").keyup(function(){
            like($("#txt").val());
     });

    
 });

 function muestratodos()
 {
    $.ajax({
        type: "POST",
        url: 'busquedarut.php',
        data: 'op=1',
        success: function(response)
        {
              $("#grilla").html(response);
       }
   });
 }

 function like(txt)
 {
    $.ajax({
        type: "POST",
        url: 'busquedarut.php',
        data: 'op=2&txt='+txt,
        success: function(response)
        {
              $("#grilla").html(response);
       }
   });
 }



</script>
</body>
</html>