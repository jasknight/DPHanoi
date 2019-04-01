@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Danh sách người khuyết tật</h1>
@stop

@section('content')
    <div>
        <table id="user-table" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Họ Tên</th>
            <th>Địa chỉ email</th>
            <th>Giới tính</th>
            <th>Tình trạng</th>
            <th>Xác thực</th>
            <th>Chi tiết</th>
          </tr>
        </thead>
      </table>
    </div>
@endsection

@section('js')
    <script>
        $( function() {
            $('#user-table').DataTable( {
                'data': {!! $users !!},
                'columns': [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'gender' },
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
                            if (row.status === 0) {
                                html += "<button type='button' class='btn btn-success'>Xem thông tin đăng ký</button>";
                            }
                            return html;
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
                    }
                ],
                'columnDefs': [ {
                    'targets': [5, 6],
                    'orderable': false,
                }]
            });
        });
    </script>
@endsection

@section('css')
    .user-info {}
@stop
