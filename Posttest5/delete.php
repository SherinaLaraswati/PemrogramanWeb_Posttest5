<?php 

require 'config.php';

if(isset($_GET['kode_SmartWatch'])){
    $kode_SmartWatch = $_GET['kode_SmartWatch'];

    $result = mysqli_query($db, 
        "DELETE FROM data_weartime WHERE kode_SmartWatch='$kode_SmartWatch'");

    if($result){
        header("Location:tampil.php");
    }
}