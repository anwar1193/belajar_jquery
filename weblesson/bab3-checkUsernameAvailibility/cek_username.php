<?php  

    $koneksi = mysqli_connect('localhost', 'root', '', 'dbs_jquery');
    $username = $_POST['username'];
    $query = "SELECT * FROM tbl_karyawan WHERE nama='$username'";
    $result = mysqli_query($koneksi, $query);

    $cek = mysqli_num_rows($result);
    
    if($cek > 0){
        echo '<span style="color:red; font-weight:bold">Nama Sudah Ada di Database</span>';
    }else{
        if(strlen($username) > 3){
            echo '<span style="color:green; font-weight:bold">Sip.. Nama Tersedia</span>';
        }else{
            echo '<span style="color:red; font-weight:bold">Nama Minimal 4 Karakter</span>';
        }
    }

?>