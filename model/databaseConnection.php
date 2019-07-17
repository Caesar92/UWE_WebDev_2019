<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    
    // Create connection
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=bddwebproject', $username, $password);
        //echo "Connected successfully";
    } catch (PDOException $e) {
        die("Connection failed: " . $e);
    }
    
    // Check connection
    // if ($dbh->) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

?>