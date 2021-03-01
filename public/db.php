<?php
    define('PAY_URL','http://localhost:8000/');
     $servername = 'localhost';
     $username = 'root';
     $password = '';

     //On établit la connexion
     $bdd = new PDO("mysql:host=$servername;dbname=cfleleader", $username, $password);
?>
