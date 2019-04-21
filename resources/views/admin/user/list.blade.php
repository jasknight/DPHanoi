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
        <th>Chỉnh sửa</th>
        <th>Xóa</th>
        <th>Xác thực</th>
        </tr>
    </thead>
    </table>

<form action="/users/approve/" method="POST" id="approve-form">
    @csrf
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Xác thực người dùng</h4>
          </div>
          <div class="modal-body">
            <p>Bạn có chắc chắn về thông tin người dùng này không ?</p>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-confirm-modal">Xác thực</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>

@endsection

@section('css')
<style type="text/css">
#user-table button {
    width: 100px;
}
</style>
@stop

@section('js')
    <script>
        $( function() {
            var approveId = null;

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
                            html += `<a class='btn btn-info user-info' href='/admin/users/${row.id}'><i class='fa fa-edit'></i> Thông tin</a>`;
                            return html;
                        },
                    },
                    {
                        data: '',
                        render: function ( data, type, row, meta ) {
                            var html = '';
                            html += "<a class='btn btn-danger'><i class='fa fa-trash-o'></i> Xóa</a>";
                            return html;
                        },
                    },
                    {
                        data: '',
                        render: function ( data, type, row, meta ) {
                            var html = '';
                            if (row.status === 0) {
                                html += `<button class='btn btn-success btn-approve' data-toggle='modal' data-target='#myModal' data-id=${row.id}><i class='fa fa-check'></i> Xác thực</button>`;
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

            $('.btn-approve').click(function() {
                approveId = $(this).data('id');
            })

            $('.btn-confirm-modal').click(function(e) {
                e.preventDefault();
                $('#approve-form').attr('action', '/admin/users/approve/' + approveId);
                $('#approve-form').submit();
            })
        });
    </script>
@endsection
