@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Thêm người quản trị</h1>
@stop

@section('content')
    <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
        <label class="control-label col-sm-1" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-1" for="pwd">Password:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
        </div>
        </div>
        <div class="col-sm-offset-1 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
        </div>
    </form>
@endsection
