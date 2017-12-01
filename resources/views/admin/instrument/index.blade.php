@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            Studio List
                            <a onclick="addForm()" class="btn btn-primary pull-right" style="margin-top: -8px;">Add
                                Pengurus</a>


                        </h4>
                    </div>
                    <div class="panel-body">
                        <table id="pengurus-table" class="table table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>photo</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('studio.form')
@endsection

@section('scripts')
    <script type="text/javascript">
        var table, save_method;
        table = $('#pengurus-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.studio.data') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'show_photo', name: 'show_photo', searchable: false},
                {data: 'nama_studio', name: 'nama_studio'},
                {data: 'harga_studio', name: 'harga_studio'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        $(function () {
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()) {
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ $base_url }}";
                    else url = "{{ $base_url . '/' }}" + id;

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success: function ($data) {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Success!',
                                text: 'Data has been created!',
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error: function () {
                            swal({
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });

        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Add Category');
            $('.content').show();
            $('.content2').hide();
        }

        function showForm(id) {
            $('input[name=_method]').text('PATCH');


            $('#modal-form form')[0].reset();
            $.ajax({
                url: "{{ $base_url . '/' }}" + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function (data) {
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Detail Studio');
                    $('.nama_studio').text(data.nama_studio);
                    $('.harga_studio').text(data.harga_studio);
                    $('.ulasan_studio').text(data.ulasan_studio);
                    $('.gambar_studio').text(data.gambar_studio);

                    $(".photos:not([src=\"\"])").attr("src", "{{ 'http://localhost:8000' }}" + data.gambar_studio);
                    $('.photos[src=\"\"]').prop("src", "{{ 'http://localhost:8000/upload/photo/ATbrxjpyc.jpg' }}");
                    $('.content').hide();
                    $('.content2').show();
                },
                error: function () {
                    alert("Nothing Data");
                }
            });
        }


        function editForm(id) {
            save_method = "edit";
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "{{ $base_url . '/' }}" + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function (data) {
                    $('.content').show();
                    $('.content2').hide()
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Studio');
                    $('#nama_studio').val(data.nama_studio);
                    $('#harga_studio').val(data.harga_studio);
                    $('#ulasan_studio').val(data.ulasan_studio);
                    $('#id').val(data.id);


                },
                error: function () {
                    alert("Nothing Data");
                }
            });
        }

        function deleteData(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                $.ajax({
                    url: "{{ $base_url . '/' }}" + id,
                    type: "POST",
                    data: {'_method': 'DELETE', '_token': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: 'Data has been created!',
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });
        }

    </script>
@endsection