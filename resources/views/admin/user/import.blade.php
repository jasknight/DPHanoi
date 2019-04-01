@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Import người dùng</h1>
@stop

@section('content')
    {!! Form::open(['url' => route('admin.user.importUser'), 'method' => 'post', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::file('user_file', ['accept'=> '.csv , .xlsx , .xssb']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Import người dùng', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
