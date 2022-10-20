<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir</title>
    <link rel ="stylesheet"  href = "data.css">
</head>
<body>
    <h3>Pendataan SmartWatch</h3>
    <form action="" method="post">
        <label for="">Masukkan nama admin: </label><br>
        <input type="text" name="Nama_Admin"><br><br>
        <label for="">Masukkan no telpon admin: </label><br>
        <input type="number" name="Nomer_Telepon"><br><br>
        <label for="">Masukkan merek smartwatch: </label><br>
        <input type="text" name="Merek_SmartWatch"><br><br>
        <label for="">Masukkan jumlah stock awal smartwatch: </label><br>
        <input type="number" name="Jumlah_Stock"><br><br>
        <label for="">Masukkan jumlah smartwatch yang terjual: </label><br>
        <input type="number" name="Jumlah_Terjual"><br><br>
        <label for="">Masukkan warna yang tersedia: </label><br>
        <input type="text" name="Warna_Tersedia"><br><br>
        <input type="submit" name="Send">
    </form>
    <?php
    require 'config.php';

    if(isset($_POST['Send'])){
        $nama = $_POST['Nama_Admin'];
        $nomer= $_POST['Nomer_Telepon'];
        $merek = $_POST['Merek_SmartWatch'];
        $stock= $_POST['Jumlah_Stock'];
        $jumlah= $_POST['Jumlah_Terjual'];
        $warna = $_POST['Warna_Tersedia'];

        $result = mysqli_query($db, 
        "INSERT INTO data_weartime (Nama_Admin, Nomer_Telepon, Merek_SmartWatch, Jumlah_Stock, Jumlah_Terjual, Warna_Tersedia) 
        VALUES ('$nama','$nomer','$merek', '$stock', '$jumlah', '$warna')");

        if($result){
            echo "
                <script>
                    alert('Data Berhasil Dikirim');
                    document.location.href='index.php'
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Dikirim');
                </script>
            ";
        }
    }
?>
</body>
</html>