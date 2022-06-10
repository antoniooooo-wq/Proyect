<?php
    function conexion()
    {
        $con=mysqli_connect("localhost","root","12345678","podologia");
        mysqli_set_charset($con, 'utf8');
        return $con;
    }

?>