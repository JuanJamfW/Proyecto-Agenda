<?php
//DB detalles
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'citas';

//Conexión a la base de datos
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
?>