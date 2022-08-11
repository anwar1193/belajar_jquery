<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live CRUD Table</title>
    <script src="../../jquery.js"></script>
</head>
<body>
    <h2>Live CRUD Table</h2>

    <div id="live-data"></div>


    <script>

        $(document).ready(function(){

            function fetch_data(){
                $.ajax({
                    url : "select.php",
                    method : "POST",
                    success : function(data){
                        $('#live-data').html(data);
                    }
                });
            }

            fetch_data();

            // lebih sakti dari : $('#btn-add').click(function(), karena bisa panggil dari halaman lain asal terhubung
            $(document).on('click', '#btn-add', function(){
                let nik = $('#nik').text();
                let nama = $('#nama').text();
                let tahun_masuk = $('#tahun_masuk').text();
                let saldo = $('#saldo').text();
                
                if(nik=="" || nama=="" || tahun_masuk=="" || saldo==""){
                    alert("Harap isi semua data");
                    return false;
                }

                $.ajax({
                    url : "insert.php",
                    method : "POST",
                    data : {nik:nik, nama:nama, tahun_masuk:tahun_masuk, saldo:saldo},
                    dataType : 'text',
                    success : function(result){
                        alert(result);
                        fetch_data();
                    }
                }); 
            });


            // Fungsi Update Data
            function edit_data(id, data, column_name){
                $.ajax({
                    url : "edit.php",
                    method : "POST",
                    data : {id:id, data:data, column_name:column_name},
                    dataType : 'text',
                    success : function(result){
                        alert(result);
                        fetch_data();
                    }
                });
            }

            // ketika kolom nama di blur (di klik lalu di tinggalkan)
            $(document).on('blur', '.nama', function(){
                let id = $(this).data('id1');
                let nama = $(this).text();
                edit_data(id, nama, "nama");
            });

            // ketika kolom tahun_masuk di blur (di klik lalu di tinggalkan)
            $(document).on('blur', '.tahun_masuk', function(){
                let id = $(this).data('id2');
                let tahun_masuk = $(this).text();
                edit_data(id, tahun_masuk, "tahun_masuk");
            });

            // ketika kolom saldo di blur (di klik lalu di tinggalkan)
            $(document).on('blur', '.saldo', function(){
                let id = $(this).data('id3');
                let saldo = $(this).text();
                edit_data(id, saldo, "saldo");
            });

            // ketika tombol hapus di klik
            $(document).on('click', '#btn-delete', function(){
                let id = $(this).data('id4');

                if(confirm("Apakah Anda Yakin?")){
                    $.ajax({
                        url : "hapus.php",
                        method : "POST",
                        data : {id:id},
                        dataType : 'text',
                        success : function(result){
                            alert(result);
                            fetch_data();
                        }
                    });
                }
            });

        });

    </script>
</body>
</html>