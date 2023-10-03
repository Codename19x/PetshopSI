<?php
    include('connect.php');
    $id=$_GET['id'];
    
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $alamat=$_POST['alamat'];
    $status=$_POST['select'];
    
    mysqli_query($conn,"UPDATE `data_pasien` SET namaPasien='$nama', jenis='$jenis', alamat='$alamat', status='$status' WHERE idPasien='$id'");
    header('location:pendataan_pasien.php');
?>