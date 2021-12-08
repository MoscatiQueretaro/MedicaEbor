
<?php
/*$server = "localhost";
$username = "yoyoman_ebor";
$password = "Yoyito2206";
$dbname = "yoyoman_ebor";
$port = "3306";*/


$server = "localhost";
$username = "k8azaupcyufp";
$password = "Ebor2020=";
$dbname = "ebor";
$port = "3306";

/*$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ebor_datos";
$port = "3308";*/
// Create connection
try{
   $conn = new PDO("mysql:host=$server;port=$port;dbname=$dbname","$username","$password");
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   die('Unable to connect with the database');
}


