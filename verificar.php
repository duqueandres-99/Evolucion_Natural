<?php

    require_once("homeController.php");
    session_start();
    $obj = new homeController();
    $usuario = $_POST['cuenta'];
    $clave = $_POST['clave'];
    $bandera = $obj->verificarusuario($usuario,$clave);
    if($bandera){
        echo "acceso concedido";
        $_SESSION['usuario'] = $usuario;
        header("Location:panel_control.php");
    }else{
        $error = "<li>Datos incorrectos</li>";
        header("Location:login.php?error=".$error);
    }


?>
