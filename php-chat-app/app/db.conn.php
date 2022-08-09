<?php 
#Servidor
$sName = "localhost";
#Username
$uName = "root";
#Password
$pass = "";
#Base de datos
$db_name = "chat_app_db";
#Conexion a la base de datos
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}