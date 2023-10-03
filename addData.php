<?php
    include('connect.php');
    
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $alamat=$_POST['alamat'];
    $status=$_POST['select'];
    
    mysqli_query($conn,"INSERT INTO `data_pasien` (namaPasien,jenis,alamat,status) VALUES ('$nama','$jenis','$alamat','$status')");
    header('location:pendataan_pasien.php');
     
?>