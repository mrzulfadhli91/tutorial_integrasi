<?php

    include 'connection.php';

    $idpelajar = $_GET['id'];

    mysqli_query($conn, "DELETE FROM pelajar WHERE noPelajar = '$idpelajar' ");

    header("location: view_pelajar.php");


?>