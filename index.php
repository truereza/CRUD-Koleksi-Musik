<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <title>Dashboard</title>

  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">NAMA WEB</a>
    </nav>
    <!-- /NAVBAR -->

    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">HELLO!</h1>
        <p class="lead"></p>
    </div>
    </div>

    <div class ="container">
      <div class = row>
        <div class="col-md-12">
          <div class="pull-left">
            <button class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah data</button>
          </div>
        </div>
      </div>
      <div class = row>
       <div class = "col-md-12">
       <h4>Record:</h4>
       <div class="records_content"></div>         
       </div>
      </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label for="nama_artis">Nama Artis</label>
              <input type="text" id="nama_artis" placeholder="Nama Artis" class="form-control"/>
            </div>

            <div class="form-group">
              <label for="album">Album</label>
              <input type="text" id="album" placeholder="Album" class="form-control"/>
            </div>

            <div class="form-group">
              <label for="thn_rilis">Tahun Rilis</label>
              <input type="text" id="thn_rilis" placeholder="Tahun Rilis" class="form-control"/>
            </div>

            <div class="form-group">
              <label for="genre">Genre</label>
              <input type="text" id="genre" placeholder="Genre" class="form-control"/>
            </div>

            <div class="form-group">
              <label for="type_brg">Type</label>
              <select id="type_brg" placeholder="Type" class="form-control">
                <option value="">Type</option>
                <option value="Vinyls">Vinyls</option>
                <option value="Cassete">Cassete</option>
                <option value="CD">CD</option>
                <option value="DVD">DVD</option>
              </select>
            </div>

            <div class="form-group">
              <label for="label">Label</label>
              <input type="text" id="label" placeholder="Label" class="form-control"/>
            </div>

            <div class="form-group">
              <label for="harga">Harga Beli</label>
              <input type="text" id="harga" placeholder="Harga Beli" class="form-control"/>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-default" onclick="TambahData()">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>