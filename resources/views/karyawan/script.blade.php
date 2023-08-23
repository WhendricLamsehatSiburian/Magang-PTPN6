<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable(
            {
                processing:true,
                serverside:true,
                ajax:"{{ url('userajax') }}",
                columns:[            
                    {
                    data: 'DT_RowIndex', 
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                        },
                    {
                        data: 'persno', 
                        name: 'persno'},
                    {
                        data: 'nama', 
                        name: 'nama'},
                    {
                        data: 'suskel', 
                        name: 'suskel'},
                    {
                        data: 'ptkp', 
                        name: 'ptkp'},
                    {
                        data: 'personel', 
                        name: 'personel'},
                    {
                        data: 'psubarea', 
                        name: 'psubarea'},
                    {
                        data: 'personel2', 
                        name: 'personel2'},
                    {
                        data: 'orgunit', 
                        name: 'orgunit'},
                    {
                        data: 'organization', 
                        name: 'organization'},
                    {
                        data: 'position', 
                        name: 'position'},
                    {
                        data: 'position2', 
                        name: 'position2'},
                    {
                        data: 'costcenter', 
                        name: 'costcenter'},
                    {
                        data: 'costctr', 
                        name: 'costctr'},
                    {
                        data: 'eegrp', 
                        name: 'eegrp'},
                    {
                        data: 'employee', 
                        name: 'employee'},
                    {
                        data: 'esgrp', 
                        name: 'esgrp'},
                    {
                        data: 'employee2', 
                        name: 'employee2'},
                    {
                        data: 'birthdayplace', 
                        name: 'birthdayplace'},
                    {
                        data: 'birthdaydate', 
                        name: 'birthdaydate'},
                    {
                        data: 'parea', 
                        name: 'parea'},
                    {
                        data: 'psgroup', 
                        name: 'psgroup'},
                    {
                        data: 'lv', 
                        name: 'lv'},
                    {
                        data: 'educationalestablishment', 
                        name: 'educationalestablishment'},
                    {
                        data: 'institue', 
                        name: 'institue'},
                    {
                        data: 'tglmasuk', 
                        name: 'tglmasuk'},
                    {
                        data: 'tglcutitahunan', 
                        name: 'tglcutitahunan'},
                    {
                        data: 'tglcutipanjang', 
                        name: 'tglcutipanjang'},
                    {
                        data: 'tglmbt', 
                        name: 'tglmbt'},
                    {
                        data: 'tglpensiun', 
                        name: 'tglpensiun'},
                    {
                        data: 'genderkey', 
                        name: 'genderkey'},
                    {
                        data: 'actiontype', 
                        name: 'actiontype'},
                    {
                        data: 'reason', 
                        name: 'reason'},
                    {
                        data: 'startdate', 
                        name: 'startdate'},
                    {
                        data: 'employeestatus', 
                        name: 'employeestatus'},
                    {
                        data: 'username', 
                        name: 'username'},
                    {
                        data: 'email', 
                        name: 'email'},
                    {
                        data: 'role', 
                        name: 'role'},
                    {
                        data: 'password', 
                        name: 'password'},
                    
                
                    {
                        data:'aksi',
                        name:'aksi'
                    },

                    ]

            
            
            });
    });

    // GLOBAL
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ADD

    $('body').on('click', '.tombol-tambah', function(e){
        e.preventDefault();
        $('#exampleModal').modal('show');

        $('.simpanunit').click(function(){  
            simpan();

                });
        });

     // 03_PROSES EDIT 
     $('body').on('click', '.tomboledit', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: 'userajax/' + id + '/edit',
            type: 'GET',
            success: function(response) {
                $('#exampleModal').modal('show');

                $('#persno').val(response.result.persno);
                $('#nama').val(response.result.nama);
                $('#suskel').val(response.result.suskel);
                $('#ptkp').val(response.result.ptkp);
                $('#personel').val(response.result.personel);
                $('#psubarea').val(response.result.psubarea);
                $('#personel2').val(response.result.personel2);
                $('#orgunit').val(response.result.orgunit);
                $('#organization').val(response.result.organization);
                $('#position').val(response.result.position);
                $('#position2').val(response.result.position2);
                $('#costcenter').val(response.result.costcenter);
                $('#costctr').val(response.result.costctr);
                $('#eegrp').val(response.result.eegrp);
                $('#employee').val(response.result.employee);
                $('#esgrp').val(response.result.esgrp);
                $('#employee2').val(response.result.employee2);
                $('#birthdayplace').val(response.result.birthdayplace);
                $('#birthdaydate').val(response.result.birthdaydate);
                $('#parea').val(response.result.parea);
                $('#psgroup').val(response.result.psgroup);
                $('#lv').val(response.result.lv);
                $('#educationalestablishment').val(response.result.educationalestablishment);
                $('#institue').val(response.result.institue);
                $('#tglmasuk').val(response.result.tglmasuk);
                $('#tglcutitahunan').val(response.result.tglcutitahunan);
                $('#tglcutipanjang').val(response.result.tglcutipanjang);
                $('#tglmbt').val(response.result.tglmbt);
                $('#tglpensiun').val(response.result.tglpensiun);
                $('#genderkey').val(response.result.genderkey);
                $('#actiontype').val(response.result.actiontype);
                $('#reason').val(response.result.reason);
                $('#startdate').val(response.result.startdate);
                $('#employeestatus').val(response.result.employeestatus);
                $('#username').val(response.result.username);
                $('#email').val(response.result.email);
                $('#role').val(response.result.role);
                $('#password').val(response.result.password);


                console.log(response.result);
                $('.simpanunit').click(function() {
                    simpan(id);
                });
            }
        });

    });   

        // 04_PROSES Delete 
        $('body').on('click', '.tomboldelete', function(e) {
        if (confirm('Yakin mau hapus data ini?') == true) {
            var id = $(this).data('id');
            $.ajax({
                url: 'userajax/' + id,
                type: 'DELETE',
            });
            $('#myTable').DataTable().ajax.reload();
        }
    });
        


        // SIMPAN
    function simpan(id = '') {
        if (id == '') {
            var var_url = 'userajax';
            var var_type = 'POST';
        } else {
            var var_url = 'userajax/' + id;
            var var_type = 'PUT';
        }
        $.ajax({
            url: var_url,
            type: var_type,
            data: {

                 persno: $('#persno').val(),
                 nama: $('#nama').val(),
                 suskel: $('#suskel').val(),
                 ptkp: $('#ptkp').val(),
                 personel: $('#personel').val(),
                 psubarea: $('#psubarea').val(),
                 personel2: $('#personel2').val(),
                 orgunit: $('#orgunit').val(),
                 organization: $('#organization').val(),
                 position: $('#position').val(),
                 position2: $('#position2').val(),
                 costcenter: $('#costcenter').val(),
                 costctr: $('#costctr').val(),
                 eegrp: $('#eegrp').val(),
                 employee: $('#employee').val(),
                 esgrp: $('#esgrp').val(),
                 employee2: $('#employee2').val(),
                 birthdayplace: $('#birthdayplace').val(),
                 birthdaydate: $('#birthdaydate').val(),
                 parea: $('#parea').val(),
                 psgroup: $('#psgroup').val(),
                 lv: $('#lv').val(),
                 educationalestablishment: $('#educationalestablishment').val(),
                 institue: $('#institue').val(),
                 tglmasuk: $('#tglmasuk').val(),
                 tglcutitahunan: $('#tglcutitahunan').val(),
                 tglcutipanjang: $('#tglcutipanjang').val(),
                 tglmbt: $('#tglmbt').val(),
                 tglpensiun: $('#tglpensiun').val(),
                 genderkey: $('#genderkey').val(),
                 actiontype: $('#actiontype').val(),
                 reason: $('#reason').val(),
                 startdate: $('#startdate').val(),
                 employeestatus: $('#employeestatus').val(),
                 username: $('#username').val(),
                 email: $('#email').val(),
                 role: $('#role').val(),
                 password: $('#password').val()

            },
            success: function(response) {
                if (response.errors) {
                    console.log(response.errors);
                    $('.alert-danger').removeClass('d-none');
                    $('.alert-danger').html("<ul>");
                    $.each(response.errors, function(key, value) {
                        $('.alert-danger').find('ul').append("<li>" + value +
                            "</li>");
                    });
                    $('.alert-danger').append("</ul>");
                } else {
                    $('.alert-success').removeClass('d-none');
                    $('.alert-success').html(response.success);
                }
                $('#myTable').DataTable().ajax.reload();
            }

        });
    }




    $('#exampleModal').on('hidden.bs.modal', function() {
                 $('#persno').val('');
                 $('#nama').val('');
                 $('#suskel').val('');
                 $('#ptkp').val('');
                 $('#personel').val('');
                 $('#personel2').val('');
                 $('#orgunit').val('');
                 $('#organization').val('');
                 $('#position').val('');
                 $('#psubarea').val('');
                 $('#position2').val('');
                 $('#costcenter').val('');
                 $('#costctr').val('');
                 $('#eegrp').val('');
                 $('#employee').val('');
                 $('#esgrp').val('');
                 $('#employee2').val('');
                 $('#birthdayplace').val('');
                 $('#birthdaydate').val('');
                 $('#parea').val('');
                 $('#psgroup').val('');
                 $('#lv').val('');
                 $('#educationalestablishment').val('');
                 $('#institue').val('');
                 $('#tglmasuk').val('');
                 $('#tglcutitahunan').val('');
                 $('#tglcutipanjang').val('');
                 $('#tglmbt').val('');
                 $('#tglpensiun').val('');
                 $('#genderkey').val('');
                 $('#actiontype').val('');
                 $('#reason').val('');
                 $('#startdate').val('');
                 $('#employeestatus').val('');
                 $('#username').val('');
                 $('#email').val('');
                 $('#role').val('');
                 $('#password').val('');







        

        $('.alert-danger').addClass('d-none');
        $('.alert-danger').html('');

        $('.alert-success').addClass('d-none');
        $('.alert-success').html('');
    });
</script>