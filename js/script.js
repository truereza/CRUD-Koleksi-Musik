function TambahData(){
    var nama_artis = $("#nama_artis").val();
    var album = $("#album").val();
    var thn_rilis = $("#thn_rilis").val();
    var genre = $("#genre").val();
    var type_brg = $("#type").val();
    var label = $("#label").val();
    var harga = $("#harga").val();

    $.post("ajax/Tambah.php", {
        nama_artis: nama_artis,
        album: album,
        thn_rilis: thn_rilis,
        genre:genre,
        type_brg: type_brg,
        label: label,
        harga: harga
    }, function (data, status){
        $("#tambah").modal("hide");

        BacaRecord();

        $("#nama_artis").val("");
        $("#album").val("");
        $("#thn_rilis").val("");
        $("#genre").val("");
        $("#type").val("");
        $("#label").val("");
        $("#harga").val("");
    });
}

function BacaRecord(){
    $.get("ajax/BacaRecord.php", {}, function(data, status){
        $(".records_content").html(data);
    });
}