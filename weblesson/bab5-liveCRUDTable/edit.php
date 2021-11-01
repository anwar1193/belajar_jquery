<?php  
    require_once('koneksi.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $column_name = $_POST['column_name'];

    $query = "UPDATE tbl_karyawan SET $column_name='$data' WHERE id=$id";

    if(mysqli_query($koneksi, $query) > 0){
        echo "Update Berhasil, data diganti jadi ".$data;
    }
?>