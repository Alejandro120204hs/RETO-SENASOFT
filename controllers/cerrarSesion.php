<?php

    // INVOCAMOS LA CONEXION
    require_once("../models/conexion.php");

    session_destroy();
    echo"<script>location.href='../views/extras/login.php'</script>";

?>