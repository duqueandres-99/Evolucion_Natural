<?php

    require_once("homecontroller.php");

    $obj = new homecontroller();

    $accion = $_POST['act'];


  

    if($accion == "Nuevo"){

        $usuario = $_POST['usuario']; 
        $nombres = $_POST['Nombres'];
        $apellidos = $_POST['Apellidos'];
        $direccion = $_POST['Direccion'];
        $correo = $_POST['correo'];
        $cel = $_POST['cel'];
        $error = "";
        
        

    $clave = $_POST['clave'];
    $clavec = $_POST['confirmC'];

    if(empty($usuario) || empty($clave) || empty($clavec) || empty($nombres) || empty($apellidos) || empty($direccion) || empty($correo) || empty($cel)){
        $error .= "<li>Completa los datos</li>";
        header("Location:registrarse.php?error=".$error."&&usuario=".$usuario."&&clave=".$clave."&&confirmC=".$clavec."&&Nombres=".$nombres."&&Apellidos=".$apellidos."&&Direccion=".$direccion."&&correo=".$correo."&&cel=".$cel);
    }elseif($clave == $clavec){

        ECHO $usuario;
        ECHO $clave;
        ECHO $nombres;
        ECHO $apellidos;
        ECHO $direccion;
        ECHO $correo;
        ECHO $cel;
                $obj->guardarUsuario($usuario,$clave,$nombres,$apellidos,$direccion,$correo,$cel);
                
                //header("Location:login.php?error=".$error);

            }else{
                
                echo '<script language="javascript">alert("Usuario creado con exito");</script>';
                $error .= "<li>Las contraseñas no coinciden!!</li>";
                header("Location:registrarse.php?error=".$error."&&usuario=".$usuario."&&clave=".$clave."&&confirmC=".$clavec."&&Nombres=".$nombres."&&Apellidos=".$apellidos."&&Direccion=".$direccion."&&correo=".$correo."&&cel=".$cel);
                
            }
        }
        


        if($accion == "ingresar"){

            $usuario = $_POST['usuario']; 
            $clave = $_POST['clave'];
            $_SESSION['usuario'] = $usuario;


                    $bandera = $obj->verificarusuario($usuario,$clave);

                    if($bandera == "paso"){

                        if($usuario == "MASTER"){
                            session_start();        
                            header("Location:headerM.php?usuario=".$usuario);

                        }elseif($usuario == "Administrador"){
                            session_start();
                            header("Location:headerA.php?usuario=".$usuario);

                         }else{

                            session_start();
                            header("Location:header.php?usuario=".$usuario);

                          }
                    
                    }elseif($bandera == "no paso"){

                        header("Location:login.php");

                     }elseif($bandera == "no existe"){

                        echo "no existe";
                        header("Location:login.php");

                      }

                    
    

        }




if($accion == "Crear"){
    $usuario = $_POST['usuario']; 
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $direccion = $_POST['Direccion'];
    $correo = $_POST['correo'];
    $cel = $_POST['cel'];
    $error = "";
    $accion = $_POST['act'];
    $id = $_POST['id'];

    $obj->nuevoUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel);
    header("Location:headerM.php?usuario=MASTER&act=".$accion);
}

if($accion == "Crearua"){
    $usuario = $_POST['usuario']; 
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $direccion = $_POST['Direccion'];
    $correo = $_POST['correo'];
    $cel = $_POST['cel'];
    $error = "";
    $accion = $_POST['act'];
    $id = $_POST['id'];

    $obj->nuevoUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel);
    header("Location:headerA.php?act=".$accion);
}

if($accion == "Editar"){

    $usuario = $_POST['usuario']; 
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $direccion = $_POST['Direccion'];
    $correo = $_POST['correo'];
    $cel = $_POST['cel'];
    $error = "";
    
    $id = $_POST['id'];

    $obj->actualizarUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel,$id);
    header("Location:headerM.php?usuario=MASTER&act=".$accion);
    
}


if($accion == "EditarA"){

    $usuario = $_POST['usuario']; 
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $direccion = $_POST['Direccion'];
    $correo = $_POST['correo'];
    $cel = $_POST['cel'];
    $error = "";
    
    $id = $_POST['id'];

    $obj->actualizarUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel,$id);
    header("Location:headerA.php?act=".$accion);
    
}

if($accion == "Eliminar"){

    $id = $_POST['id'];
    $obj->eliminarUsuario($id);
    header("Location:headerM.php?usuario=MASTER&act=".$accion);
    
}

if($accion == "EliminarA"){

    $id = $_POST['id'];
    $obj->eliminarUsuario($id);
    header("Location:headerA.php?act=".$accion);
    
}





if($accion == "Editarp"){

    $categoria = $_POST['categoria']; 
    $articulo = $_POST['Nombre_art'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    
    $idi = $_POST['idi'];

    $obj->actualizarArticulo($categoria,$articulo,$cantidad,$precio,$idi);
    header("Location:headerM.php?usuario=MASTER&act=".$accion);
    
}

if($accion == "Editarpa"){

    $categoria = $_POST['categoria']; 
    $articulo = $_POST['Nombre_art'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    
    $idi = $_POST['idi'];

    $obj->actualizarArticulo($categoria,$articulo,$cantidad,$precio,$idi);
    header("Location:headerA.php?act=".$accion);
    
}

if($accion == "Eliminarp"){

    $idi = $_POST['idi'];
    $obj->eliminarArticulo($idi);
    header("Location:headerM.php?usuario=MASTER&act=".$accion);
    
}

if($accion == "Eliminarpa"){

    $idi = $_POST['idi'];
    $obj->eliminarArticulo($idi);
    header("Location:headerA.php?act=".$accion);
    
}

if($accion == "CrearP"){
    
    $categoria = $_POST['categoria']; 
    $articulo = $_POST['Nombre_art'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $accion = $_POST['act'];

    
    $obj->nuevoArticulo($categoria,$articulo,$cantidad,$precio);
    header("Location:headerM.php?usuario=MASTER&act=".$accion);
}

?>