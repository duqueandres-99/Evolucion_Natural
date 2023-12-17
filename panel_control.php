<?php



    session_start();

    if($_SESSION['usuario'] == "MASTER"){
        require_once("headerM.php");
    }elseif($_SESSION['usuario'] == "Administrador"){
        require_once("headerA.php");
    }else{
        require_once("header.php");
    }
?>



<?php
    require_once("footer.php");
?>