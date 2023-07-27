<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myData";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $conn->prepare('INSERT INTO inscription(nom,prenom,email,mdp ) VALUES (:nom,:prenom,:email,:mdp)');
       $req->execute(array(
        'nom'=>"PALI",
        'prenom'=>"Joie",
        'email'=>"majoie@gmail.com",
        'mdp'=>"xxxx"
       ));
    }
catch(PDOException $e)
    {
    echo "<br>".$e->getMessage();
    }

$conn = null;
?> 