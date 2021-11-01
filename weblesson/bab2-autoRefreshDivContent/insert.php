<?php  
    $koneksi = mysqli_connect('localhost', 'root', '', 'dbs_jquery');
    $chat = $_POST['isi_chat'];
    $query = "INSERT INTO tbl_chat(chat) VALUES('$chat')";
    mysqli_query($koneksi, $query);
?>