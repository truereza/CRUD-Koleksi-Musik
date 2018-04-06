<?php
    include 'config.php';

    $data = '<table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>Artis</th>
                    <th>Album</th>
                    <th>Tahun Rilisan</th>
                    <th>Genre</th>
                    <th>Type</th>
                    <th>Label</th>
                    <th>Harga Beli</th>
                    <th>Perbarui</th>
                    <th>Hapus</th>
                </tr>';
    $query = "SELECT * FROM barang";

    if(!$hasil = mysqli_query($koneksi, $query)){
        exit(mysqli_error($koneksi));
    }

    if(mysqli_num_rows($hasil) > 0){
        $no = 1;
        while($row = mysqli_fetch_assoc($hasil)){
            $data .= '<tr>
                        <td>'.$no.'</td>
                        <td>'.$row['nama_artis'].'</td>
                        <td>'.$row['album'].'</td>
                        <td>'.$row['thn_rilis'].'</td>
                        <td>'.$row['genre'].'</td>
                        <td>'.$row['type_brg'].'</td>
                        <td>'.$row['label'].'</td>
                        <td>'.$row['harga_beli'].'</td>
                    </tr>';
                    $no++;
        }
    }else{
        $data .= '<tr><td colspan ="6">Tidak ada data!</td></tr>';
    }
    $data = '</table>';

    echo $data;
?>