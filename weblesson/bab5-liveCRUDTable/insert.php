<?php  
    require_once('koneksi.php');
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $query = "INSERT INTO tbl_karyawan(nik,nama,tahun_masuk) VALUES('$nik', '$nama', '$tahun_masuk')";
    $result = mysqli_query($koneksi, $query) or die ('error insert data');

    if($result > 0){
        echo 'Data Tersimpan';
    }
?>