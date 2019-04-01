@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Xét duyệt đăng ký') }}</div>

                <div class="card-body">
                    <div role="alert">
                        {{ __('Đơn xin đăng ký thành viên của bạn đã được nhận.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
