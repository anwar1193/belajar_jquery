<?php  
    require_once('koneksi.php');
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $saldo = $_POST['saldo'];
    $query = "INSERT INTO tbl_karyawan(nik,nama,tahun_masuk,saldo) VALUES('$nik', '$nama', '$tahun_masuk', $saldo)";
    $result = mysqli_query($koneksi, $query) or die ('error insert data');

    if($result > 0){
        echo 'Data Tersimpan';
    }
?>