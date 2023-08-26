<?php 

    $host = "localhost";
    $database = "phonebook_sql";
    $user = "root";
    $password = "";

    try{
        $connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e){
        $error = $e->getMessage();
        echo "Error: $error";
    }