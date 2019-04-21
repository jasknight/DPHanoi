@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Thông tin chi tiết người dùng</h1>
@stop

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
	<div>
        {!! Form::open(['url' => route('admin.users.editUser', ['id' => $user->id]), 'method' => 'post', 'id' => 'admin-register-form']) !!}
            @csrf
            <div class="form-row">
                <div class="form-input has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    {{ Form::label('name', 'Họ tên') }}
                    {{ Form::text('name', $user->name, ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-input has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', $user->email, ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-input has-feedback {{ $errors->has('gender') ? 'has-error' : '' }}">
                    {{ Form::label('gender', 'Giới tính') }}
                    {{ Form::select('gender', ['male' => 'Nam','female' => 'Nữ'], $user->gender, ['class' => 'form-control', 'required', 'placeholder' => 'Chọn 1 trong số những lựa chọn sau']) }}
                    @if ($errors->has('gender'))
                    <span class="help-block">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-input has-feedback {{ $errors->has('birthday') ? 'has-error' : '' }}">
                    {{ Form::label('birthday', 'Ngày sinh') }}
                    {{ Form::text('birthday', $user->birthday, ['class' => 'form-control', 'id' => 'birthday', 'required', 'autocomplete' => 'off']) }}
                    @if ($errors->has('birthday'))
                        <span class="help-block">
                            <strong>{{ $errors->first('birthday') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-input has-feedback {{ $errors->has('district_id') ? 'has-error' : '' }}">
                    {{ Form::label('district_id', 'Quận/Huyện') }}
                    <select class="form-control search-select" name="district_id" id="district-select" required>
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
                <div class="form-input has-feedback {{ $errors->has('subdistrict_id') ? 'has-error' : '' }}">
                    {{ Form::label('subdistrict_id', 'Phường/Xã/Thị Trấn') }}
                    <select class="form-control search-select" name="subdistrict_id" id="subdistrict-select" required>
                        <option>
                        @foreach ($subdistricts as $subdistrict)
                            <option value={{ $subdistrict->id }}>{{ $subdistrict->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('subdistrict_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('subdistrict_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-input has-feedback {{ $errors->has('address') ? 'has-error' : '' }}">
                    {{ Form::label('address', 'Địa Chỉ Thường Trú') }}
                    {{ Form::textarea('address', $user->address, ['class' => 'form-control', 'id' => 'address', 'rows' => '3', 'required']) }}
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-input has-feedback {{ $errors->has('phone') ? 'has-error' : '' }}">
                    {{ Form::label('phone', 'Số điện thoại') }}
                    {{ Form::text('phone', $user->phone, ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-input has-feedback {{ $errors->has('identity_card') ? 'has-error' : '' }}">
                    {{ Form::label('identity_card', 'Số chứng minh thư') }}
                    {{ Form::text('identity_card', $user->identity_card, ['class' => 'form-control', 'required', 'autocomplete' => 'off']) }}
                    @if ($errors->has('identity_card'))
                    <span class="help-block">
                        <strong>{{ $errors->first('identity_card') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-input has-feedback {{ $errors->has('labor_ability') ? 'has-error' : '' }}">
                    {{ Form::label('labor_ability', 'Khả năng lao động') }}
                    {{ Form::select('labor_ability', ['1' => 'Có','0' => 'Không'], $user->labor_ability, ['class' => 'form-control', 'required', 'placeholder' => 'Chọn 1 trong số những lựa chọn sau']) }}
                    @if ($errors->has('labor_ability'))
                        <span class="help-block">
                            <strong>{{ $errors->first('labor_ability') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            

            <div class="form-row">
                <div class="form-input has-feedback {{ $errors->has('academic_level') ? 'has-error' : '' }}">
                    {{ Form::label('academic_level', 'Trình Độ Học Vấn') }}
                    {{ Form::text('academic_level', $user->academic_level, ['class' => 'form-control', 'required']) }}
                    @if ($errors->has('academic_level'))
                        <span class="help-block">
                            <strong>{{ $errors->first('academic_level') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-input has-feedback {{ $errors->has('specialize') ? 'has-error' : '' }}">
                    {{ Form::label('specialize', 'Chuyên Môn') }}
                    {{ Form::text('specialize', $user->specialize, ['class' => 'form-control', 'required']) }}
                    @if ($errors->has('specialize'))
                    <span class="help-block">
                        <strong>{{ $errors->first('specialize') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-input has-feedback {{ $errors->has('employment_status') ? 'has-error' : '' }}">
                    {{ Form::label('employment_status', 'Công Việc Đang Làm (Nếu Có)') }}
                    {{ Form::text('employment_status', $user->employment_status, ['class' => 'form-control', 'required']) }}
                    @if ($errors->has('employment_status'))
                    <span class="help-block">
                        <strong>{{ $errors->first('employment_status') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-input has-feedback {{ $errors->has('income') ? 'has-error' : '' }}">
                    {{ Form::label('income', 'Thu Nhập Cá Nhân') }}
                    {{ Form::text('income', $user->income, ['class' => 'form-control', 'required']) }}
                    @if ($errors->has('income'))
                        <span class="help-block">
                            <strong>{{ $errors->first('income') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-input has-feedback {{ $errors->has('disability') ? 'has-error' : '' }}">
                    {{ Form::label('disability', 'Hình thức khuyết tật') }}
                    {{ Form::select('disability', $disabilities, $user->userDisability->disability_id, ['class' => 'form-control', 'required', 'placeholder' => 'Chọn 1 trong số những lựa chọn sau']) }}
                    @if ($errors->has('disability'))
                    <span class="help-block">
                        <strong>{{ $errors->first('disability') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-input has-feedback {{ $errors->has('disability_detail') ? 'has-error' : '' }}">
                    {{ Form::label('disability_detail', 'Chi tiết tình trạng khuyết tật') }}
                    {{ Form::text('disability_detail', $user->userDisability->detail, ['class' => 'form-control', 'required']) }}
                    @if ($errors->has('disability_detail'))
                        <span class="help-block">
                            <strong>{{ $errors->first('disability_detail') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group has-feedback {{ $errors->has('need') ? 'has-error' : '' }}">
                {{ Form::label('need', 'Nhu Cầu') }}
                @php
                    $needIds = $user->userNeed->pluck('need_id')->toArray()
                @endphp
                <div class="checkbox-container">
                    @foreach ($needs as $need)
                        <div class="checkbox">
                            @if ($need->detail === 'Học nghề')
                                <label>
                                    {{ Form::checkbox('need[]', $need->id, in_array($need->id, $needIds)) }}
                                    Học nghề (Ghi rõ nghề muốn học)
                                </label>
                                <br/>
                                {{ Form::text('user-job-detail', $user->userNeed->where('need_id', $need->id)->first() ? $user->userNeed->where('need_id', $need->id)->first()->detail : '', ['class' => 'form-control', 'id' => 'user-job-detail']) }}
                            @else
                                <label>
                                    {{ Form::checkbox('need[]', $need->id, in_array($need->id, $needIds)) }}
                                    {{ $need->detail }}
                                </label>
                            @endif
                        </div>
                    @endforeach
                </div>
                @if ($errors->has('need'))
                    <span class="help-block">
                        <strong>{{ $errors->first('need') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-input">
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('css')
<style type="text/css">
#admin-register-form {
    margin-right: 35px;
    height: 100%;
}

#admin-register-form .form-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

#admin-register-form .form-input {
    width: 48%;
}

textarea {
    resize: none;
}

.checkbox-container {
    display: flex;
    flex-wrap: wrap;
}

.checkbox {
    flex-basis: 30%;
    margin-top: 0px;
}

.has-error .checkbox label{
    color: #333;
}
</style>
@stop

@section('js')
<script>
    $( function() {
        $("#birthday").datepicker(
            { dateFormat: 'yy-mm-dd' }
        );

        $('#district-select').select2({
            placeholder: 'Chọn 1 trong số lựa chọn sau',
            allowClear: true
        }).val({{$user->district_id}}).trigger('change');

        $('#subdistrict-select').select2({
            placeholder: 'Chọn 1 trong số lựa chọn sau',
            allowClear: true
        }).val({{$user->subdistrict_id}}).trigger('change');

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
@stop