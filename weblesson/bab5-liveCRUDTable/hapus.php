<?php 
    require_once('koneksi.php');
    $id = $_POST['id'];
    $query = "DELETE FROM tbl_karyawan WHERE id='$id'";
    if(mysqli_query($koneksi, $query) > 0){
        echo "Data Terhapus";
    }
?>