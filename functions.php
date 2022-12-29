<?php

    if(!isset($_POST['submit'])) {
        $clientName = $_POST["Brandname"];
        $clientContact = $_POST["contact"];
        $clientMessage = $_POST["project_details"];
    
        require_once ("db_connect.php");

        $sql = "INSERT INTO details (ClientName, Contact, ClientMessage) VALUES (?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
    
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: contact.php?error=smthwentwrong");
            exit();
        }
    
        mysqli_stmt_bind_param($stmt, "sss", $clientName, $clientContact, $clientMessage);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        header("Location: contact.php?error=none");
        exit();
    }
    else{
        echo "E no work";
   };