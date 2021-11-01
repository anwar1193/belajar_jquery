<?php 
    $koneksi = mysqli_connect('localhost', 'root', '', 'dbs_jquery');
    $query = "SELECT * FROM tbl_chat ORDER BY id DESC";
    $result = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_array($result)){
            echo '<p>'.$data['chat'].'</p><hr>';
        }
    }
?>