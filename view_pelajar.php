<?php 

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);


    include 'connection.php';

    $data = mysqli_query($conn, "SELECT * FROM pelajar");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Data Pelajar</h1><br><br>

            <a href="add_pelajar.php">Tambah Pelajar</a><br>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No Pelajar</th>
                    <th>Nama Pelajar</th>
                    <th>Jantina</th>
                    <th>No Phone</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php

                    while($view = mysqli_fetch_array($data)){

                ?>
                <tr>
                    <td> <?php echo $view['namaPelajar']; ?> </td>
                    <td> <?php echo $view['jantina']; ?> </td>
                    <td> <?php echo $view['noHP']; ?> </td>
                    <td> <a href="update.php?id=<?php echo $view['noPelajar']; ?>"  >Update</a> </td>
                    <td> <a href="delete.php?id=<?php echo $view['noPelajar']; ?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>