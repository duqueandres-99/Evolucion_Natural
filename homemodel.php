<?php

    class homeModel{
        private $PDO;
        public function __construct(){

            require_once("Config/base.php");
            $pdo = new base();
            $this->PDO = $pdo->conexion();
        }

        public function agregarUsuario($usuario,$clave,$nombres,$apellidos,$direccion,$correo,$cel){

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
            

            $sql = "INSERT INTO usuarios (`ID_Usuario`, `Nombre_usuario`, `Contrasena`,
            `Nombres`, `Apellidos`, `Direccion`, `Correo`, `Telefono`, `Cantidad_de_huertos`)
            VALUES (null,'$usuario','$clave','$nombres','$apellidos','$direccion','$correo','$cel','0')";

            if (mysqli_query($conn, $sql)) {
                //echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            

            mysqli_close($conn);
             
        }

        public function agregarnUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel){

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
            

            $sql = "INSERT INTO usuarios (`ID_Usuario`, `Nombre_usuario`, `Contrasena`,
            `Nombres`, `Apellidos`, `Direccion`, `Correo`, `Telefono`, `Cantidad_de_huertos`)
            VALUES (null,'$usuario','N123456789','$nombres','$apellidos','$direccion','$correo','$cel','0')";

            if (mysqli_query($conn, $sql)) {
                //echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            

            mysqli_close($conn);
             
        }


        public function obtenerclave($usuario){

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
                            $cuenta = $row['Nombre_usuario'];
                            $clave = $row['Contrasena'];
                            #echo $cuenta;
                            #echo $clave;
                            
                    }}

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }

        public function actualizarUsuario($usuario,$nombres,$apellidos,$direccion,$correo,$cel,$id){

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
            $sql = "UPDATE `usuarios` SET `Nombre_usuario`='$usuario',`Nombres`='$nombres',`Apellidos`='$apellidos',`Direccion`='$direccion',`Correo`='$correo',`Telefono`='$cel' WHERE `ID_Usuario` = '$id' ";
    
            if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
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
            $sql = "DELETE * FROM `usuarios` WHERE `ID_Usuario` = '$id'";
            if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }






        public function actualizarArticulo($categoria,$articulo,$cantidad,$precio,$idi){

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

            $sqli = "UPDATE `inventario` SET `Categoria`='$categoria',`Nombre_del_articulo`='$articulo',`Cantidad_disponible`='$cantidad',`Precio`='$precio' WHERE `ID_Categoria` = '$idi' ";
    
            if (mysqli_query($conn, $sqli)) {
            //echo "New record created successfully";
            } else {
            echo "Error: " . $sqli . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }

        public function agregarnArticulo($categoria,$articulo,$cantidad,$precio){

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
            

            $sqli = "INSERT INTO `inventario`(`ID_Categoria`, `Categoria`, `Nombre_del_articulo`, `Cantidad_disponible`, `Precio`) VALUES (null,'$categoria','$articulo','$cantidad','$precio') ";
            

            if (mysqli_query($conn, $sqli)) {
            //echo "New record created successfully";
            } else {
                echo "Error: " . $sqli . "<br>" . mysqli_error($conn);
            }
            

            mysqli_close($conn);
             
        }



    }


    




?>