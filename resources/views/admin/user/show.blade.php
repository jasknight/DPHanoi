@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Thông tin chi tiết người dùng</h1>
@stop

@section('content')
	<div class="row">
		<div class="col-md-6">
			<label>Họ và tên</label><br>
			{{ $user->name }}
		</div><div class="col-md-6">
			<label>Email</label><br>
			{{ $user->email }}
		</div>
	</div>
@endsection
