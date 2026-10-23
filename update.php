<?php 
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    include 'connection.php';

    $idpelajar = $_GET['id'];

    if(isset($_POST['update'])){
        $no_pelajar = $_POST['up_no_pelajar'];
        $nama_pelajar = $_POST['up_nama_pelajar'];
        $jantina = $_POST['up_jantina'];
        $no_phone = $_POST['up_no_phone'];

        mysqli_query($conn, "UPDATE pelajar SET 
        noPelajar='$no_pelajar', 
        namaPelajar='$nama_pelajar',
        jantina='$jantina',
        noHP='$no_phone' 
        WHERE noPelajar = '$idpelajar' ");

        header("location: view_pelajar.php");
    }

    $data = mysqli_query($conn, "SELECT * FROM pelajar 
    WHERE noPelajar = '$idpelajar' ");
    while($view = mysqli_fetch_array($data)){
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
                <input type="text" name="up_no_pelajar" value="<?php echo $view['noPelajar']; ?>" ><br>
                <label for="">Nama Pelajar</label>
                <input type="text" name="up_nama_pelajar" value="<?php echo $view['namaPelajar']; ?>" ><br>
                <label for="">Jantina</label>
                <input type="text" name="up_jantina" value="<?php echo $view['jantina']; ?>" ><br>
                <label for="">No Phone</label>
                <input type="text" name="up_no_phone" value="<?php echo $view['noHP']; ?>" ><br><br>
                <?php } ?>

                <input type="submit" value="kemaskini" name="update">
            </form>
        </div>
    </div>
</body>
</html>