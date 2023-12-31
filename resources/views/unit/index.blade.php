@include('partials.navbar.index')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Ntar masukin Navbar -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

</head>
  <body class="bg-light">
    <main class="container">
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Unit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                  <!-- START FORM -->

                  <div class="alert alert-danger d-none"></div>
                  <div class="alert alert-success d-none"></div>
                <div class="mb-3 row">
                    <label for="kode_unit" class="col-sm-2 col-form-label">Kode Unit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='kode_unit' id="kode_unit">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_unit" class="col-sm-2 col-form-label">Nama Unit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama_unit' id="nama_unit">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alias" class="col-sm-2 col-form-label">Alias</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='alias' id="alias">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nickname" class="col-sm-2 col-form-label">Nickname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nickname' id="nickname">
                    </div>
                </div>
        <!-- AKHIR FORM -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary simpanunit">Save changes</button>
        </div>
      </div>
    </div>
  </div>    


        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='' class="btn btn-primary tombol-tambah">+ Tambah Data</a>
                </div>
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Unit</th>
                            <th>Nama Unit</th>
                            <th>Alias</th>
                            <th>Nickname</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
    </main>
    @include('script.index')
  </body>   
</html>