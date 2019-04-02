@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Danh sách người khuyết tật</h1>
@stop

@section('content')
    <table id="user-table" class="table table-striped table-bordered display nowrap" style="width:100%">
    <thead>
        <tr>
        <th>Id</th>
        <th>Họ Tên</th>
        <th>Địa chỉ email</th>
        <th>Số điện thoại</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Quận/Huyện</th>
        <th>Phường/Xã</th>
        <th>Tình trạng</th>
        <th>Chi tiết</th>
        <th>Xác thực</th>
        </tr>
    </thead>
    </table>
@endsection

@section('js')
    <script>
        $( function() {
            $('#user-table').DataTable( {
                'data': {!! $users !!},
                "scrollX": true,
                'fixedHeader': true,
                'columns': [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'phone' },
                    {
                        data: 'gender',
                        render: function ( data, type, row, meta ) {
                            if (data === "male") {
                                return 'Nam';
                            } else {
                                return 'Nữ';
                            }
                        },
                    },
                    { data: 'address' },
                    {
                        data: '',
                        render: function ( data, type, row, meta ) {
                            return row.district.name;
                        },
                    },
                    {
                        data: '',
                        render: function ( data, type, row, meta ) {
                            return row.subdistrict.name;
                        },
                    },
                    {
                        data: 'status',
                        render: function ( data, type, row, meta ) {
                            if (row.status === 1) {
                                return 'Đã xác thực';
                            } else {
                                return 'Chưa xác thực';
                            }
                        },
                    },
                    {
                        data: '',
                        render: function ( data, type, row, meta ) {
                            var html = '';
                            html += `<a class='btn btn-info user-info' href='/admins/users/${row.id}' style='margin-right: 20px; width: 80px'>Thông tin</a>`;
                            html += "<a class='btn btn-danger' style='width: 80px'>Xóa</button>";
                            return html;
                        },
                    },
                    {
                        data: '',
                        render: function ( data, type, row, meta ) {
                            var html = '';
                            if (row.status === 0) {
                                html += "<button type='button' class='btn btn-success'>Xác thực</button>";
                            }
                            return html;
                        },
                    }
                ],
                'columnDefs': [ {
                    'targets': [9, 10],
                    'orderable': false,
                }]
            });


        });
    </script>
@endsection
