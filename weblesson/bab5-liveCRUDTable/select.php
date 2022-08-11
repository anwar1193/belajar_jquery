<?php  
    require_once('koneksi.php');

    $query = "SELECT * FROM tbl_karyawan";
    $result = mysqli_query($koneksi, $query) or die('error fungsi');

    $output = "";

    $output .= '
    <table width="50%" cellpadding="5px" cellspacing="0" border="1">
        <tr style="background-color:yellow">
            <td>NO</td>
            <td>NIK</td>
            <td>Nama</td>
            <td>Tahun Masuk</td>
            <td>Saldo</td>
            <td>Action</td>
        </tr>
    ';

    if(mysqli_num_rows($result) > 0){

        $total_saldo = 0;
        $no=0;
        while($row = mysqli_fetch_array($result)){
            $total_saldo += $row['saldo'];
            $no++;
            $output .= '
                <tr style="text-align:center">
                    <td>'.$no.'</td>
                    <td>'.$row["nik"].'</td>
                    <td contenteditable class="nama" data-id1="'.$row["id"].'">'.$row["nama"].'</td>
                    <td contenteditable class="tahun_masuk" data-id2="'.$row["id"].'">'.$row["tahun_masuk"].'</td>
                    <td contenteditable class="saldo" data-id3="'.$row["id"].'">'.$row["saldo"].'</td>
                    <td>
                        <button style="background-color:red; color:white" id="btn-delete" data-id4="'.$row['id'].'">Hapus</button>
                    </td>
                </tr>
            ';
        }

        $output .= '
            <tr>
                <td style="text-align:center">#</td>
                <td id="nik" contenteditable></td>
                <td id="nama" contenteditable></td>
                <td id="tahun_masuk" contenteditable></td>
                <td id="saldo" contenteditable></td>
                <td style="text-align:center">
                    <button id="btn-add" style="background-color:green; color:white">Simpan</button>
                </td>
            </tr>

            <tr>
                <td colspan="6">TOTAL : '.$total_saldo.'</td>
            </tr>
        ';

    }else{
        $output .= '
            <tr>
                <td colspan="5">Data Not Found</td>
            </tr>
        ';
    }

    $output .= '
    </table>
    ';

    echo $output;

?>
