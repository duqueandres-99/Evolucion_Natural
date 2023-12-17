<?php

    class base{

        

        public function conexion(){
            try {

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

                

            } catch (PDOException $e){

                return $e->getMessage();

            }


        }

    }


?>