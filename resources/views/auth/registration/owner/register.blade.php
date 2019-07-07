@extends('auth.layout')

@section('content')
<form action="/owner/register" class="signup-form form-small-space" id="signup-form" method="POST">
    {{ csrf_field() }}
    <div class="log-card">
        <div class="log-block">
            <h4 class="log-title">যানবাহন মালিক নিবন্ধন</h4>
            <div class="form-group @if($errors->first('phone')!=null) has-danger @endif">
                <div>
                    <label for="phone" class="label-log">ফোন নং <span class="required-star">*</span></label>
                    <div class="input-phone-group has-form-control-lg">
                        <input class="form-control form-control-lg form-control-danger input-phone" value="{{old('phone')}}" id="phone" name="phone" type="text">
                        <span class="country-code">+88</span>
                    </div>                            
                </div>
                <div class="form-control-feedback">@if($errors->first('phone')!=null) {{ $errors->first('phone')}} @endif</div>
            </div>
            <div class="form-group @if($errors->first('name')!=null) has-danger @endif">
                <label for="name" class="label-log">নাম <span class="required-star">*</span></label>
                <input class="form-control form-control-lg form-control-danger" value="{{old('name')}}" id="name" name="name" type="text">
                <div class="form-control-feedback">@if($errors->first('name')!=null) {{ $errors->first('name')}} @endif</div>
            </div>
            <div class="form-group @if($errors->first('email')!=null) has-danger @endif">
                <label for="email" class="label-log">ইমেইল <span class="required-star">*</span></label>
                <input class="form-control form-control-lg form-control-danger" value="{{old('email')}}" id="email" name="email" type="text">
                <div class="form-control-feedback">@if($errors->first('email')!=null) {{ $errors->first('email')}} @endif</div>
            </div>
            <div class="form-group @if($errors->first('password')!=null) has-danger @endif">
                <label for="password" class="label-log">পাসওয়ার্ড <span class="required-star">*</span></label>
                <input class="form-control form-control-lg form-control-danger" value="" id="password" name="password" type="password">
                <div class="form-control-feedback">@if($errors->first('password')!=null) {{ $errors->first('password')}} @endif</div>
            </div>
            <div class="form-group @if($errors->first('password_confirmation')!=null) has-danger @endif">
                <label for="password_confirmation" class="label-log">পাসওয়ার্ডটি পুনরায় লিখুন <span class="required-star">*</span></label>
                <input class="form-control form-control-lg form-control-danger" value="" id="password_confirmation" name="password_confirmation" type="password">
                <div class="form-control-feedback">@if($errors->first('password_confirmation')!=null) {{ $errors->first('password_confirmation')}} @endif</div>
            </div>
            <button class="btn btn-primary btn-lg mt-15 btn-block btn-sign">সাইন আপ করুন</button>
        </div>
    </div>
</form>
<div class="text-center pt-3">
    <div class="text-sm text-lighter">
        Already have an account? <a href="{{url('/session/login')}}">Sign in</a>.
    </div>   
</div>
@stop