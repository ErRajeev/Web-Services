<?php
    $servername = "localhost";
    $username = "root";
    $password = "R@jeevoo7";
    $databse = "citywide";
    $conn = mysqli_connect($servername,$username,$password,$databse);

                    // This is for error Cheak......

    if(!$conn){
            // echo "Sorry We Can't Connect To The DataBase" . mysqli_connect_error();
            echo "We are Apologise , We can't Connet To The DataBase..!!!";
    }
    // else {
    //     echo "WellDone We Are Connected To Database";
    // }
?>
