<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'DataBase-Connect.php';

        $name = $_POST["co-name"];  
        $email = $_POST["co-email"];
        $mobile = $_POST["co-mobile"];
        $text = $_POST["co-text"];

            $sql = "INSERT INTO `citywide`.`contacts` (`Name`, `Email`, `Mobile`, `Quarry`, `Date`) VALUES ('$name', '$email', '$mobile', '$text', current_timestamp())";
            $result = mysqli_query($conn, $sql);
    }
?>