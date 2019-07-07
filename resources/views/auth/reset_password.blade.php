@extends('auth.layout')

@section('content')
<form action="" class="signup-form form-small-space" id="signup-form" method="POST">
    {!! csrf_field() !!}
    <div class="log-card">
        <div class="log-block">
            <h4 class="log-title">পাসওয়ার্ড পরিবর্তন করুন</h4>
            <div class="form-group @if($errors->first('password')!=null) has-danger @endif">
                <div>
                    <label for="password" class="label-log">নতুন পাসওয়ার্ড</label>
                    <input class="form-control form-control-lg form-control-danger" value="{{old('password')}}" id="password" name="password" type="password">
                </div>
                <div class="form-control-feedback">@if($errors->first('password')!=null) {{ $errors->first('password')}} @endif</div>
            </div>

            <div class="form-group @if($errors->first('password_confirmation')!=null) has-danger @endif">
                <div>
                    <label for="password_confirmation" class="label-log">পাসওয়ার্ড নিশ্চিত করুন </label>
                    <input class="form-control form-control-lg form-control-danger" value="{{old('password_confirmation')}}" id="password_confirmation" name="password_confirmation" type="password">
                </div>
                <div class="form-control-feedback">@if($errors->first('password_confirmation')!=null) {{ $errors->first('password_confirmation')}} @endif</div>
            </div>
            
            <button class="btn btn-primary btn-lg mt-15 btn-block btn-sign">জমা করুন</button>
        </div>
    </div>
</form>
@stop