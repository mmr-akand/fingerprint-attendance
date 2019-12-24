@extends('auth.layout')

@section('content')
<form action="" class="signup-form form-small-space" id="signup-form" method="POST">
    {!! csrf_field() !!}
    <div class="log-card">
        <div class="log-block">
            <div class="text-center">
                <img src="/dashboard/images/bdlogo.png">
            </div>
            <br>
            <div class="text-center">                
                <h4 class="log-title ">LOG IN TO EMIS</h4>
            </div>
            <div class="form-group @if($errors->first('phone')!=null) has-danger @endif">
                <div>
                    <label for="phone" class="label-log">Phone</label>
                    <div class="input-phone-group has-form-control-lg">
                        <input class="form-control form-control-lg form-control-danger" value="{{old('phone')}}" id="phone" name="phone" type="text">
                    </div>                            
                </div>
                <div class="form-control-feedback">@if($errors->first('phone')!=null) {{ $errors->first('phone')}} @endif</div>
            </div>
            <div class="form-group @if($errors->first('password')!=null) has-danger @endif">
                <label for="password" class="label-log">Password</label>
                <input class="form-control form-control-lg form-control-danger" value="" id="password" name="password" type="password">
                <div class="form-control-feedback">@if($errors->first('password')!=null) {{ $errors->first('password')}} @endif</div>
            </div>
            <button class="btn btn-primary btn-lg mt-15 btn-block btn-sign">Log in</button>
        </div>
    </div>
</form>
@stop