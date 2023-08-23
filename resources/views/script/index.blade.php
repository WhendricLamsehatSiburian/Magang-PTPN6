<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable(
            {
                processing:true,
                serverside:true,
                ajax:"{{ url('unitajax') }}",
                columns:[            
                    {
                    data: 'DT_RowIndex', 
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                        },
                    {
                        data: 'kode_unit', 
                        name: 'kode_unit'},
                    {
                        data: 'nama_unit', 
                        name: 'nama_unit'},
                    {
                        data: 'alias', 
                        name: 'alias'},
                    {
                        data: 'nickname', 
                        name: 'nickname'},
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
            url: 'unitajax/' + id + '/edit',
            type: 'GET',
            success: function(response) {
                $('#exampleModal').modal('show');
                $('#kode_unit').val(response.result.kode_unit);
                $('#nama_unit').val(response.result.nama_unit);
                $('#alias').val(response.result.alias);
                $('#nickname').val(response.result.nickname);
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
                url: 'unitajax/' + id,
                type: 'DELETE',
            });
            $('#myTable').DataTable().ajax.reload();
        }
    });
        


        // SIMPAN
    function simpan(id = '') {
        if (id == '') {
            var var_url = 'unitajax';
            var var_type = 'POST';
        } else {
            var var_url = 'unitajax/' + id;
            var var_type = 'PUT';
        }
        $.ajax({
            url: var_url,
            type: var_type,
            data: {
                 nama_unit: $('#nama_unit').val(),
                 kode_unit: $('#kode_unit').val(),
                 alias: $('#alias').val(),
                 nickname: $('#nickname').val()
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
        $('#kode_unit').val('');
        $('#nama_unit').val('');
        $('#alias').val('');
        $('#nickname').val('');

        $('.alert-danger').addClass('d-none');
        $('.alert-danger').html('');

        $('.alert-success').addClass('d-none');
        $('.alert-success').html('');
    });
</script>