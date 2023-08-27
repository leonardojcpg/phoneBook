<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;
// modifying contact
if (!empty($data)) {
    
    // creating Contact in database
    if ($data["type"] === "create") {
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $statement = $connection->prepare($query);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":observations", $observations);

        try {
            $statement->execute();
            $_SESSION["msg"] = "Contact created successfully";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Error: $error";
        }
        
    } else if($data["type"] === "edit"){
        
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

        $statement = $connection->prepare($query);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":observations", $observations);
        $statement->bindParam(":id", $id);

        try {
            $statement->execute();
            $_SESSION["msg"] = "Contact updated successfully";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Error: $error";
        }

    }
    // redirectig to home page
    header("Location:" . $BASE_URL . "../index.php");
} else {
    $id;
    if (!empty($_GET)) {
        $id = $_GET["id"];
    }

    if (!empty($id)) {
        $query = "SELECT * FROM contacts WHERE id = :id";
        $statement = $connection->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $contact = $statement->fetch();
    } else {
        $contacts = [];
        $query = "SELECT * FROM contacts";
        $statement = $connection->prepare($query);
        $statement->execute();
        $contacts = $statement->fetchAll();
    }
}

//closing connection PDO
$connection = null;