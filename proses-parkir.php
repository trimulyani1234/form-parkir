<?php
include("koneksi.php");

if(isset($_POST['kirim'])){
    $jeniskendaraan = $_POST['jenis_kendaraan'];
    $tarifparkir = $_POST['tarif_harga'];

    $sql = "INSERT INTO tb_parkir (jenis_kendaraan, tarif_harga) VALUES ('$jeniskendaraan', '$tarifharga')";
    $query = mysqli_query($db, $sql);

    if($query){
        echo"Sukses";
    }else{
        echo"Gagal";
    }
}