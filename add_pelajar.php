<?php 

    include 'connection.php';

    

    if(isset($_POST['submit'])){
        $no_pelajar = $_POST['no_pelajar'];
        $nama_pelajar = $_POST['nama_pelajar'];
        $jantina = $_POST['jantina'];
        $no_phone = $_POST['no_phone'];

        mysqli_query($conn, "INSERT INTO pelajar 
        (noPelajar, namaPelajar, jantina, noHP) VALUES 
        ('$no_pelajar', '$nama_pelajar', '$jantina','$no_phone')");

        header("location: view_pelajar.php");
    }
   
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
            <h1>Tambah Data Pelajar</h1><br><br>

            <form action="" method="POST">
                <label for="">No Pelajar</label>
                <input type="text" name="no_pelajar" placeholder="Masukkan Nombor Pelajar" ><br>
                <label for="">Nama Pelajar</label>
                <input type="text" name="nama_pelajar" placeholder="Masukkan Nama Pelajar" ><br>
                <label for="">Jantina</label>
                <input type="text" name="jantina" placeholder="Masukkan Jantina" ><br>
                <label for="">No Phone</label>
                <input type="text" name="no_phone" placeholder="Masukkan Nombor Phone Pelajar" ><br><br>

                <input type="submit" value="submit" name="submit">
            </form>
        </div>
    </div>
</body>
</html>