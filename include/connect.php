<?php 
    if (!isset($_SESSION)) {
        session_start();
    }

    $db_host = '203.157.177.7';
    $db_name = 'sakonscan';
    $db_user = 'student';
    $db_pass = 'TceQCz9CU9XVcCUw';

    try {
        $conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
        // echo "Connected to Database";
        $sql = "SET NAMES utf8";
        $result = $conn -> prepare($sql);
        $result -> execute();

    } catch (PDOException $e) {
        echo $e -> getMessage();
    }

    // $sql = "SELECT * FROM ampur47";
    // $result = $conn -> prepare($sql);
    // $result -> execute();
    // $rowsAmpur = $result -> fetchAll(PDO::FETCH_ASSOC);

    // print_r($rowsAmpur);

    ?>