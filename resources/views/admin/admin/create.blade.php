@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Thêm người quản trị</h1>
@stop

@section('content')
    <div class="row">
        <form class="form-horizontal col-md-6" action="/action_page.php" autocomplete="off" id="admin-register-form">
            <div class="form-group has-feedback {{ $errors->has('identity_card') ? 'has-error' : '' }}">
                {{ Form::label('name', 'Họ tên') }}
                {{ Form::text('name', old('name'), ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group has-feedback {{ $errors->has('identity_card') ? 'has-error' : '' }}">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', old('email'), ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                {{ Form::label('password', 'Mật Khẩu') }}
                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required', 'autocomplete' => 'off']) }}
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                {{ Form::label('password_confirmation', 'Nhập Lại Mật Khẩu') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group has-feedback {{ $errors->has('district_id') ? 'has-error' : '' }}">
                {{ Form::label('district_id', 'Quận/Huyện') }}
                <select class="form-control search-select" name="district_id" id="district-select" data-value={{ old('district_id')}}  required>
                    <option>
                    @foreach ($districts as $district)
                        <option value={{ $district->id }}>{{ $district->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('district_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('district_id') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('subdistrict_id') ? 'has-error' : '' }}">
                {{ Form::label('subdistrict_id', 'Phường/Xã/Thị Trấn') }}
                <select class="form-control search-select" name="subdistrict_id" id="subdistrict-select" data-value={{ old('subdistrict_id')}}  required>
                    <option>
                    @foreach ($subdistricts as $subdistrict)
                        <option value={{ $subdistrict->id }} data-type={{ $subdistrict->district_id }}>{{ $subdistrict->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('subdistrict_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('subdistrict_id') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('gender') ? 'has-error' : '' }}">
                {{ Form::label('gender', 'Giới tính') }}
                {{ Form::select('gender', ['Nam', 'Nữ'], old('gender'), ['class' => 'form-control', 'required', 'placeholder' => 'Chọn 1 trong số những lựa chọn sau']) }}
                @if ($errors->has('gender'))
                <span class="help-block">
                    <strong>{{ $errors->first('gender') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('birthday') ? 'has-error' : '' }}">
                {{ Form::label('birthday', 'Ngày sinh') }}
                {{ Form::text('birthday', old('birthday'), ['class' => 'form-control', 'id' => 'birthday', 'required', 'autocomplete' => 'off']) }}
                @if ($errors->has('birthday'))
                    <span class="help-block">
                        <strong>{{ $errors->first('birthday') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('phone') ? 'has-error' : '' }}">
                {{ Form::label('phone', 'Số điện thoại') }}
                {{ Form::text('phone', old('phone'), ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('identity_card') ? 'has-error' : '' }}">
                {{ Form::label('identity_card', 'Số chứng minh thư nhân dân') }}
                {{ Form::text('identity_card', old('identity_card'), ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                @if ($errors->has('identity_card'))
                <span class="help-block">
                    <strong>{{ $errors->first('identity_card') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('identity_card') ? 'has-error' : '' }}">
                {{ Form::label('identity_card', 'Số điện thoại') }}
                {{ Form::text('identity_card', old('identity_card'), ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                @if ($errors->has('identity_card'))
                <span class="help-block">
                    <strong>{{ $errors->first('identity_card') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('css')
    <style type="text/css">
        #admin-register-form {
            margin-left: 15px;
        }
    </style>
@stop

@section('adminlte_js')
    <script>
        $( function() {
            $("#birthday").datepicker(
                { dateFormat: 'yy-mm-dd' }
            );

            $('.search-select').select2({
                placeholder: 'Chọn 1 trong số lựa chọn sau',
                allowClear: true
            });

            $('#subdistrict-select').prop('disabled', true);
            $('#district-select').on('change', function (e) {
                var districtValue = $('#district-select').val();
                if (districtValue === '') { 
                    $('#subdistrict-select').prop('disabled', true);
                    $('#subdistrict-select').empty().select2({
                        placeholder: 'Chọn 1 trong số lựa chọn sau',
                        data: [],
                        allowClear: true
                    });

                } else {
                    $.ajax({
                        url : "/api/subdistricts",
                        type : "post",
                        data : {
                            district_id : districtValue
                        },
                        success : function (result){
                            $('#subdistrict-select').prop('disabled', false);
                            $('#subdistrict-select').empty().select2({
                                data: result.subdistricts,
                                allowClear: true
                            });
                        }
                    });
                }
            });
        });
    </script>
    @yield('js')
@stop