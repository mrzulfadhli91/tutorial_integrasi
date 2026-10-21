<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbkolej";

    $conn = mysqli_connect($host, $username, $password) or die(mysqli_error());
    mysqli_select_db($conn, $dbname) or die(mysqli_error());


?>