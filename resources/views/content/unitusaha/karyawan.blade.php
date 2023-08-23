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
                <!-- TOMBOL TAMBAH DATA -->
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pers.No</th>
                            <th>Nama</th>
                            <th>SusKel</th>
                            <th>PTKP</th>
                            <th>Personel</th>
                            <th>PSubarea</th>
                            <th>Personel2</th>
                            <th>Org Unit</th>
                            <th>Organization</th>
                            <th>Position</th>
                            <th>Position2</th>
                            <th>Cost Center</th>
                            <th>Cost Ctr</th>
                            <th>eegrp</th>
                            <th>Employee</th>
                            <th>Esgrp</th>
                            <th>Employee2</th>
                            <th>Birthday Place</th>
                            <th>Birthday Date</th>
                            <th>PArea</th>
                            <th>PsGroup</th>
                            <th>Lv</th>
                            <th>Educational Establishment</th>
                            <th>institue</th>
                            <th>Tgl Masuk</th>
                            <th>Tgl Cuti Tahunan</th>
                            <th>Tgl Cuti Panjang</th>
                            <th>Tgl MBT</th>
                            <th>Tgl Pensiun</th>
                            <th>Gender Key</th>
                            <th>Reason</th>
                            <th>Action Type</th>
                            <th>Start Date</th>
                            <th>Employee Status</th>
                            <th>Username</th>
                            <th>Email Address</th>
                            <th>Password</th>
                            <th>Action</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
    </main>
    @include('karyawan.script')
  </body>   
</html>