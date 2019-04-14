@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}"><b>Form đăng ký thành viên DP Hà Nội</b></a>
        </div>

        <div class="register-box-body">
            {!! Form::open(['url' => config('adminlte.register_url', 'register'), 'method' => 'post']) !!}
                {!! csrf_field() !!}
                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    {{ Form::label('name', 'Họ Tên') }}
                    {{ Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name', 'required']) }}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="register-form-row">
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
                </div>

                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                        {{ Form::label('email', 'Địa Chỉ Email') }}
                        {{ Form::email('email', old('email'), ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
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
                </div>

                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('birthday') ? 'has-error' : '' }}">
                        {{ Form::label('birthday', 'Ngày sinh') }}
                        {{ Form::text('birthday', old('birthday'), ['class' => 'form-control', 'id' => 'birthday', 'required', 'autocomplete' => 'off']) }}
                        @if ($errors->has('birthday'))
                            <span class="help-block">
                                <strong>{{ $errors->first('birthday') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('gender') ? 'has-error' : '' }}">
                        {{ Form::label('gender', 'Giới tính') }}
                        {{ Form::select('gender', ['male' => 'Nam','female' => 'Nữ'], old('gender'), ['class' => 'form-control', 'id' => 'gender', 'required', 'placeholder' => 'Chọn 1 trong số những lựa chọn sau']) }}
                        @if ($errors->has('gender'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('identity_card') ? 'has-error' : '' }}">
                        {{ Form::label('identity_card', 'Số chứng minh thư') }}
                        {{ Form::text('identity_card', old('identity_card'), ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                        @if ($errors->has('identity_card'))
                        <span class="help-block">
                            <strong>{{ $errors->first('identity_card') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('labor_ability') ? 'has-error' : '' }}">
                        {{ Form::label('labor_ability', 'Khả năng lao động') }}
                        {{ Form::select('labor_ability', ['1' => 'Có','0' => 'Không'], old('gender'), ['class' => 'form-control', 'id' => 'labor_ability', 'required', 'placeholder' => 'Chọn 1 trong số những lựa chọn sau']) }}
                        @if ($errors->has('labor_ability'))
                            <span class="help-block">
                                <strong>{{ $errors->first('labor_ability') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="register-form-row">
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
                </div>

                <div class="form-group has-feedback {{ $errors->has('address') ? 'has-error' : '' }}">
                    {{ Form::label('address', 'Địa Chỉ Thường Trú') }}
                    {{ Form::textarea('address', old('address'), ['class' => 'form-control', 'id' => 'address', 'rows' => '3', 'required']) }}
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('academic_level') ? 'has-error' : '' }}">
                        {{ Form::label('academic_level', 'Trình Độ Học Vấn') }}
                        {{ Form::text('academic_level', old('academic_level'), ['class' => 'form-control', 'required']) }}
                        @if ($errors->has('academic_level'))
                            <span class="help-block">
                                <strong>{{ $errors->first('academic_level') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('specialize') ? 'has-error' : '' }}">
                        {{ Form::label('specialize', 'Chuyên Môn') }}
                        {{ Form::text('specialize', old('specialize'), ['class' => 'form-control', 'required']) }}
                        @if ($errors->has('specialize'))
                        <span class="help-block">
                            <strong>{{ $errors->first('specialize') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('employment_status') ? 'has-error' : '' }}">
                        {{ Form::label('employment_status', 'Công Việc Đang Làm (Nếu Có)') }}
                        {{ Form::text('employment_status', old('employment_status'), ['class' => 'form-control', 'required']) }}
                        @if ($errors->has('employment_status'))
                        <span class="help-block">
                            <strong>{{ $errors->first('employment_status') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('income') ? 'has-error' : '' }}">
                        {{ Form::label('income', 'Thu Nhập Cá Nhân') }}
                        {{ Form::text('income', old('income'), ['class' => 'form-control', 'required']) }}
                        @if ($errors->has('income'))
                            <span class="help-block">
                                <strong>{{ $errors->first('income') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('disability') ? 'has-error' : '' }}">
                    {{ Form::label('disability', 'Hình thức khuyết tật') }}
                    {{ Form::select('disability', $disabilities, old('disability'), ['class' => 'form-control', 'required', 'placeholder' => 'Chọn 1 trong số những lựa chọn sau']) }}
                    @if ($errors->has('disability'))
                    <span class="help-block">
                        <strong>{{ $errors->first('disability') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group has-feedback {{ $errors->has('disability_detail') ? 'has-error' : '' }}">
                    {{ Form::label('disability_detail', 'Chi tiết tình trạng khuyết tật') }}
                    {{ Form::text('disability_detail', old('disability_detail'), ['class' => 'form-control', 'required']) }}
                    @if ($errors->has('disability_detail'))
                        <span class="help-block">
                            <strong>{{ $errors->first('disability_detail') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback {{ $errors->has('need') ? 'has-error' : '' }}">
                    {{ Form::label('need', 'Nhu Cầu') }}
                    @foreach ($needs as $need)
                        <div class="checkbox">
                            @if ($need->detail === 'Học nghề')
                                <label>
                                    {{ Form::checkbox('need[]', $need->id) }}
                                    Học nghề (Ghi rõ nghề muốn học)
                                </label>
                                <br/>
                                <input type="text" name="user-job-detail" id="user-job-detail">
                            @else
                                <label>
                                    {{ Form::checkbox('need[]', $need->id) }}
                                    {{ $need->detail }}
                                </label>
                            @endif
                        </div>
                    @endforeach
                    @if ($errors->has('need'))
                        <span class="help-block">
                            <strong>{{ $errors->first('need') }}</strong>
                        </span>
                    @endif
                </div>

                <button type="submit"
                        class="btn btn-primary btn-block btn-flat"
                >{{ trans('adminlte::adminlte.register') }}</button>
            {!! Form::close() !!}
            <div class="auth-links">
                <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
    </div>
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

        function fillData() {
            $('#name').val('Do Quang Huy');
            $('#password').val('123456789');
            $('#password_confirmation').val('123456789');
            $('#email').val('huydq2510@gmail.com');
            $('#phone').val('0368636007');
            $('#birthday').val('1996-10-25');
            $('#gender').val('male');
            $('#labor_ability').val('1');
            $('#identity_card').val('0123456789');
            $('#district-select').val('2');
            $('#subdistrict-select').val('37');
            $('#address').val('Số 14, ngõ 463 đường Hồng Hà, Hoàn Kiếm, Hà Nội');
            $('#academic_level').val('10/10');
            $('#specialize').val('CNTT');
            $('#employment_status').val('Làm văn phòng');
            $('#income').val('9500000');
            $('#disability').val('5');
            $('#disability_detail').val('Bình thường');
        };
    </script>
    @yield('js')
@stop
