<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=projectalumni;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        }
    catch(PDOException $e)
        {
        // echo "Connection failed: " . $e->getMessage();
        }
?>