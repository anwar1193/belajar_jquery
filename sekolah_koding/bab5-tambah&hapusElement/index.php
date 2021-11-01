<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah & Hapus Element</title>
    <style>
        .kotak{
            width: 200px;
            height: 200px;
            background-color: salmon;
            color: white;
            text-align: center;
            line-height: 200px;
            font-size: 20px;
        }
    </style>
    <script src="../../jquery.js"></script>
</head>
<body>
    
    <button id="tambahInputan">Tambah Inputan</button>
    <button id="hapusInputan">Hapus Inputan</button>
    <br>

    <form action="">
        <div id="multipleInput" style="margin-top: 10px;">
            <span class="item">Barang : <input type="text"><br></span> 
        </div>

        <button style="margin-top: 10px;">Simpan Data</button>
    </form>

    <div class="kasus2" style="margin-top: 70px;">
        <button id="hapusKotak">Hapus Kotak</button>
        <button id="hapusIsiKotak">Hapus Isi Kotak</button>
        <button id="kembalikanKotak">Tambah Kotak</button>

        <div class="kotak">
            Hello World
        </div>

    </div>

    <script>
        $(document).ready(function(){
            $('#tambahInputan').click(function(){
                $('#multipleInput').append('<span class="item">Barang : <input type="text" value="<?php echo 'Halo' ?>"><br></span> ');
            });

            $('#hapusInputan').click(function(){
                $('.item:last').remove();
            });

            $('#hapusKotak').click(function(){
                $('.kotak').remove();
            });

            $('#hapusIsiKotak').click(function(){
                $('.kotak').empty();
            });

            $('#kembalikanKotak').click(function(){
                $('.kasus2').append('<div class="kotak">Hello World</div>');
            });
        });
    </script>
</body>
</html>