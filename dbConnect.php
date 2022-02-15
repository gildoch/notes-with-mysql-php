<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "sticks";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        //echo "Connection failed: " . $e->getMessage();
      }


    /*
    $connection = new mysqli($server, $user,$password,$dbname);

    if($connection -> connect_error){
        die("Connection Failed" .$connection->connect_error);
    }
    print("Connected to database");
    */
?>