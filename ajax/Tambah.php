<?php
    if(isset($_POST['nama_artis']) && isset($_POST['album']) && isset($_POST['thn_rilis']) &&
    isset($_POST['genre']) && isset($_POST['type_brg']) && isset($_POST['label']) && isset($_POST['harga']))
    {
        include 'config.php';
        
        $artis = $_POST['nama_artis'];
        $album = $_POST['album'];
        $rilis = $_POST['thn_rilis'];
        $genre = $_POST['genre'];
        $type = $_POST['type_brg'];
        $label = $_POST['label'];
        $harga = $_POST['harga'];

        $query = "INSERT INTO barang(kode, nama_artis, album, thn_rilis, genre, type_brg, label, harga_beli) VALUES('','$artis','$album','$rilis','$genre','$type', '$label', '$harga')";

        if(!$hasil =  mysqli_query($koneksi,$query)){
            exit(mysqli_error());
        }
        echo 'Data berhasil ditambahkan!';  
    }
?>