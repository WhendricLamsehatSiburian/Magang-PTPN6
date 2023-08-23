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



        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
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