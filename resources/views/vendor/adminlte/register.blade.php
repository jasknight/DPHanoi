@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>

        <div class="register-box-body">
            <p class="register-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
            <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                {!! csrf_field() !!}
                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Họ Tên</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password">Mật Khẩu</label>
                        <input type="password" name="password" class="form-control" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        <label for="password_confirmation">Nhập Lại Mật Khẩu</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="register-form-row">
                    <div class="form-group colhas-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Địa Chỉ Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <label for="phone">Số Điện Thoại</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>



                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('birthday') ? 'has-error' : '' }}">
                        <label for="birthday">Ngày Sinh</label>
                        <input id="birthday" name="birthday" class="form-control" value="{{ old('birthday') }}" placeholder="{{ trans('adminlte::adminlte.birthday') }}" required>
                        @if ($errors->has('birthday'))
                            <span class="help-block">
                                <strong>{{ $errors->first('birthday') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('gender') ? 'has-error' : '' }}">
                        <label for="gender">Giới Tính</label>
                        <div>
                            <label class="radio-inline"><input type="radio" name="gender" required>Nam</label>
                            <label class="radio-inline"><input type="radio" name="gender">Nữ</label>
                        </div>
                        @if ($errors->has('gender'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('identity_card') ? 'has-error' : '' }}">
                        <label for="phone">Số Chứng Minh Thư</label>
                        <input type="input" id="identity_card" name="identity_card" class="form-control" value="{{ old('identity_card') }}" required>
                        @if ($errors->has('identity_card'))
                            <span class="help-block">
                                <strong>{{ $errors->first('identity_card') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('labor_ability') ? 'has-error' : '' }}">
                        <label for="labor_ability">Khả Năng Lao Động</label>
                        <div>
                            <label class="radio-inline"><input type="radio" name="labor_ability" required>Còn</label>
                            <label class="radio-inline"><input type="radio" name="labor_ability">Không còn</label>
                        </div>
                        @if ($errors->has('labor_ability'))
                            <span class="help-block">
                                <strong>{{ $errors->first('labor_ability') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('address') ? 'has-error' : '' }}">
                    <label for="address">Địa Chỉ Thường Trú</label>
                    <textarea class="form-control" rows="3" value="{{ old('address') }}" name="address" id="address" required></textarea>
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('academic_level') ? 'has-error' : '' }}">
                        <label for="address">Trình Độ Học Vấn</label>
                        <input type="input" id="academic_level" name="academic_level" class="form-control" value="{{ old('academic_level') }}" required>
                        @if ($errors->has('academic_level'))
                            <span class="help-block">
                                <strong>{{ $errors->first('academic_level') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('specialize') ? 'has-error' : '' }}">
                        <label for="specialize">Chuyên Môn</label>
                        <input type="input" id="specialize" name="specialize" class="form-control" value="{{ old('specialize') }}" required>
                        @if ($errors->has('specialize'))
                        <span class="help-block">
                            <strong>{{ $errors->first('specialize') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="register-form-row">
                    <div class="form-group has-feedback {{ $errors->has('employment_status') ? 'has-error' : '' }}">
                        <label for="employment_status">Công Việc Đang Làm (Nếu Có)</label>
                        <input type="input" id="employment_status" name="employment_status" class="form-control" value="{{ old('employment_status') }}" required>
                        @if ($errors->has('employment_status'))
                        <span class="help-block">
                            <strong>{{ $errors->first('employment_status') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('income') ? 'has-error' : '' }}">
                        <label for="income">Thu Nhập Cá Nhân</label>
                        <input type="text" id="income" name="income" class="form-control" value="{{ old('income') }}" required>
                        @if ($errors->has('income'))
                            <span class="help-block">
                                <strong>{{ $errors->first('income') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('disability') ? 'has-error' : '' }}">
                    <label for="disability">Hình thức khuyết tật</label>
                    <select class="form-control" name='disability' required>
                        <option value="" disabled selected>Chọn 1 trong số những lựa chọn sau</option>
                        @foreach ($disabilities as $disability)
                        <option value={{$disability->id}}>{{ $disability->description }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('disability'))
                    <span class="help-block">
                        <strong>{{ $errors->first('disability') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group has-feedback {{ $errors->has('disability_detail') ? 'has-error' : '' }}">
                    <label for="disability_detail">Chi Tiết Tình Trạng Khuyết Tật</label>
                    <input id="disability_detail" name="disability_detail" class="form-control" value="{{ old('disability_detail') }}" required>
                    @if ($errors->has('disability_detail'))
                        <span class="help-block">
                            <strong>{{ $errors->first('disability_detail') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback {{ $errors->has('need') ? 'has-error' : '' }}">
                    <label for="need">Nhu Cầu</label>
                    @foreach ($needs as $need)
                        <div class="checkbox">
                        <label><input type="checkbox" value={{ $need->id }} name="need[]">{{ $need->detail }}</label>
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
            </form>
            <div class="auth-links">
                <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    <script>
        $( function() {
            $( "#birthday" ).datepicker(
                { dateFormat: 'yy-mm-dd' }
            );
        } );
    </script>
    @yield('js')
@stop
