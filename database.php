<?php
$servername = "localhost";
$username = "root";
$password = "";
//$connect = "CREATE DATABASE myPDO";
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect = "CREATE DATABASE myJoyce";
    $conn->exec($connect);
    echo "Connected successfully ";
    }
catch(PDOException $e)
    {
    echo $connect . $e->getMessage();
    }
    $conn = null;
?> 

