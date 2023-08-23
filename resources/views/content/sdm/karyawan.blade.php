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
                    <label for="persno" class="col-sm-2 col-form-label">Persno</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='persno' id="persno">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama' id="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="suskel" class="col-sm-2 col-form-label">suskel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='suskel' id="suskel">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ptkp" class="col-sm-2 col-form-label">ptkp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='ptkp' id="ptkp">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="personel" class="col-sm-2 col-form-label">personel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='personel' id="personel">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="psubarea" class="col-sm-2 col-form-label">psubarea</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='psubarea' id="psubarea">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="personel2" class="col-sm-2 col-form-label">personel2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='personel2' id="personel2">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="orgunit" class="col-sm-2 col-form-label">orgunit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='orgunit' id="orgunit">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="organization" class="col-sm-2 col-form-label">organization</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='organization' id="organization">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="position" class="col-sm-2 col-form-label">position</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='position' id="position">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="position2" class="col-sm-2 col-form-label">position2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='position2' id="position2">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="costcenter" class="col-sm-2 col-form-label">costcenter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='costcenter' id="costcenter">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="costctr" class="col-sm-2 col-form-label">costctr</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='costctr' id="costctr">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="eegrp" class="col-sm-2 col-form-label">eegrp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='eegrp' id="eegrp">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="employee" class="col-sm-2 col-form-label">employee</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='employee' id="employee">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="esgrp" class="col-sm-2 col-form-label">esgrp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='esgrp' id="esgrp">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="employee2" class="col-sm-2 col-form-label">employee2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='employee2' id="employee2">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="birthdayplace" class="col-sm-2 col-form-label">birthdayplace</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='birthdayplace' id="birthdayplace">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="birthdaydate" class="col-sm-2 col-form-label">birthdaydate</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='birthdaydate' id="birthdaydate">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="parea" class="col-sm-2 col-form-label">parea</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='parea' id="parea">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="psgroup" class="col-sm-2 col-form-label">psgroup</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='psgroup' id="psgroup">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lv" class="col-sm-2 col-form-label">lv</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='lv' id="lv">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="educationalestablishment" class="col-sm-2 col-form-label">educationalestablishment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='educationalestablishment' id="educationalestablishment">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="institue" class="col-sm-2 col-form-label">institue</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='institue' id="institue">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglmasuk" class="col-sm-2 col-form-label">tglmasuk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tglmasuk' id="tglmasuk">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglcutitahunan" class="col-sm-2 col-form-label">tglcutitahunan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tglcutitahunan' id="tglcutitahunan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglcutipanjang" class="col-sm-2 col-form-label">tglcutipanjang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tglcutipanjang' id="tglcutipanjang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglmbt" class="col-sm-2 col-form-label">tglmbt</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tglmbt' id="tglmbt">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglpensiun" class="col-sm-2 col-form-label">tglpensiun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tglpensiun' id="tglpensiun">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="genderkey" class="col-sm-2 col-form-label">genderkey</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='genderkey' id="genderkey">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="actiontype" class="col-sm-2 col-form-label">actiontype</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='actiontype' id="actiontype">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="reason" class="col-sm-2 col-form-label">reason</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='reason' id="reason">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="startdate" class="col-sm-2 col-form-label">startdate</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='startdate' id="startdate">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="employeestatus" class="col-sm-2 col-form-label">employeestatus</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='employeestatus' id="employeestatus">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='username' id="username">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name='email' id="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="role" class="col-sm-2 col-form-label">role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='role' id="role">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name='password' id="password">
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