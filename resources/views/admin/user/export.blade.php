@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Export người dùng</h1>
@stop

@section('content')
    @if(!empty($errors->all()))
        <div class="text-danger">
            Lỗi:
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    {!! Form::open(['url' => route('admin.users.exportUser'), 'method' => 'post']) !!}
        <div class="form-group">
            {{ Form::submit("<i class='fa fa-download' aria-hidden='true'></i> Export người dùng", ['class' => 'btn btn-primary']) }}
        </div>
    {!! Form::close() !!}
@endsection
