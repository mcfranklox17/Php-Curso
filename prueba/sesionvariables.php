<?php 

    session_start();
    $_SESSION["user"] = "franklox";
    $_SESSION["status"] = "logged";

    echo "Sesión iniciada: <br>";
    echo "Usuario: ".$_SESSION["user"]." status: ".$_SESSION["status"];
?>