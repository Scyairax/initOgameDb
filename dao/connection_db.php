<?php
session_name("parser");
session_start();

$hostname = "localhost";
$username = "root";
$password = "asd123-.,A";
$db_name = "ogame";

//apertura connessione al database
try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>