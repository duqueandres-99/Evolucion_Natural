<?php

    class homeController{
        private $MODEL;
        public function __construct(){
            require_once("homemodel.php");
            $this->MODEL = new homeModel();
        }
        public function guardarUsuario($usuario,$clave,$nombres,$apellidos,$direccion,$correo,$cel){
            $valor = $this->MODEL->agregarUsuario($usuario,$clave,$nombres,$apellidos,$direccion,$correo,$cel);
            return $valor;
        }

        public function nuevoUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel){
            $valor = $this->MODEL->agregarnUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel);
            return $valor;
        }

        public function encriptarContraseña($contraseña){
            return password_hash($contraseña,PASSWORD_DEFAULT);
        }

        public function verificarusuario($usuario,$clave){

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mhi";
            // Crear conexión
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Revisar conexión
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT Contrasena FROM usuarios WHERE 'Nombre_usuario' = '$usuario'";

            if (mysqli_query($conn, $sql)) {
                #echo "New record created successfully";

                $listo = "SELECT `Nombre_usuario`, `Contrasena` FROM `usuarios` WHERE `Nombre_usuario` = '$usuario'";
                $result = mysqli_query($conn, $listo);
                if ($result) {
                    #echo "New record created successfully";
                    while($row = mysqli_fetch_array($result)) {
                            $keydb = $row['Contrasena'];
                            $keyus = $row['Nombre_usuario'];

                            if($usuario == $keyus && $keydb == $clave){

                                $msj = "paso";
                                return $msj;
                                
                            }

                            if($usuario == $keyus && $keydb != $clave){

                                $msj = "no paso";
                                return $msj;
                                
                            }

 
                    }}

                    $msj = "no existe";
                    return $msj;

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
        }


        public function eliminarUsuario($id){

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mhi";
            // Crear conexión
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Revisar conexión
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "DELETE FROM `usuarios` WHERE `ID_Usuario` = '$id'";
            if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);

        }


        public function actualizarUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel,$id){

            $valor = $this->MODEL->actualizarUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel,$id);
            return $valor;
        }

        public function actualizarArticulo($categoria,$articulo,$cantidad,$precio,$idi){

            $valor = $this->MODEL->actualizarArticulo($categoria,$articulo,$cantidad,$precio,$idi);
            return $valor;
        }

        public function eliminarArticulo($idi){

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mhi";
            // Crear conexión
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Revisar conexión
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            $sqli = "DELETE FROM `inventario` WHERE `ID_Categoria` = '$idi'";
            if (mysqli_query($conn, $sqli)) {
            //echo "New record created successfully";
            } else {
            echo "Error: " . $sqli . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);

        }

        public function nuevoArticulo($categoria,$articulo,$cantidad,$precio){
            $valor = $this->MODEL->agregarnArticulo($categoria,$articulo,$cantidad,$precio);
            return $valor;
        }

    }
?>