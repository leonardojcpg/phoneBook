<?php 

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $query = "SELECT * FROM contacts";

    $statement = $connection->prepare($query);
    
    $statement->execute();
    $contacts = $statement->fetchAll();

?>