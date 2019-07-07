@extends('auth.layout')

@section('content')
<form action="" class="signup-form form-small-space" id="signup-form" method="POST">
    {!! csrf_field() !!}
    <div class="log-card">
        <div class="log-block">
            <h4 class="log-title">একাউন্ট পুনরুদ্ধার করুন</h4>
            <div class="form-group @if($errors->first('email')!=null) has-danger @endif">
                <div>
                    <label for="email" class="label-log">ইমেইল</label>
                    <div class="input-email-group has-form-control-lg">
                        <input class="form-control form-control-lg form-control-danger" value="{{old('email')}}" id="email" name="email" type="text">                       
                    </div>                            
                </div>
                <div class="form-control-feedback">@if($errors->first('email')!=null) {{ $errors->first('email')}} @endif</div>
            </div>
            
            <button class="btn btn-primary btn-lg mt-15 btn-block btn-sign">জমা করুন</button>
        </div>
    </div>
</form>
@stop