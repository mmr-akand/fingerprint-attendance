@extends('auth.layout')

@section('content')
<form action="" class="signup-form form-small-space" id="signup-form" method="POST">
    {!! csrf_field() !!}
    <div class="log-card">
        <div class="log-block">
            <h4 class="log-title">হেভিগাড়ী ড্যাশবোর্ডে সাইন ইন করুন</h4>
            <div class="form-group @if($errors->first('phone')!=null) has-danger @endif">
                <div>
                    <label for="phone" class="label-log">ফোন নং</label>
                    <div class="input-phone-group has-form-control-lg">
                        <input class="form-control form-control-lg form-control-danger input-phone" value="{{old('phone')}}" id="phone" name="phone" type="text">
                        <span class="country-code">+88</span>
                    </div>                            
                </div>
                <div class="form-control-feedback">@if($errors->first('phone')!=null) {{ $errors->first('phone')}} @endif</div>
            </div>
            <div class="form-group @if($errors->first('password')!=null) has-danger @endif">
                <label for="password" class="label-log">পাসওয়ার্ড</label>
                <input class="form-control form-control-lg form-control-danger" value="" id="password" name="password" type="password">
                <div class="form-control-feedback">@if($errors->first('password')!=null) {{ $errors->first('password')}} @endif</div>
            </div>
            <button class="btn btn-primary btn-lg mt-15 btn-block btn-sign">লগ ইন</button>
        </div>
    </div>
</form>
<div class="text-center pt-3">
    <div class="text-sm text-lighter">
        <a href="{{url('session/login/forgot_password')}}">পাসওয়ার্ড ভূলে গেছেন? </a>.
    </div>
    <div class="text-sm text-lighter">
        একাউন্ট নেই ? <a href="{{url('customer/register')}}">এখানে সাইন আপ করুন </a>.
    </div>
</div>
@stop