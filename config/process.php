<?php 

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $id;
    if(!empty($_GET)){
        $id = $_GET['id'];
    }

    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";
        $statement = $connection->prepare($query);
        $statement-> bindParam(":id", $id);
        $statement->execute();
        $contact = $statement->fetch();
    } else {
        $contacts = [];
        $query = "SELECT * FROM contacts";
        $statement = $connection->prepare($query);
        $statement->execute();
        $contacts = $statement->fetchAll();
    }