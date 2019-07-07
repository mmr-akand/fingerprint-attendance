@extends('auth.layout')

@section('content')
<form action="" class="signup-form form-small-space" id="signup-form" method="POST">
    {!! csrf_field() !!}
    <div class="log-card">
        <div class="log-block">
            <h3>ফোন নং যাচাই করুন</h3>
            <hr />
            <div class="form-group @if($errors->first('code')!=null) has-danger @endif">
                <label for="code" class="label-log">কোড</label>
                <input class="form-control form-control-lg form-control-danger" value="" id="code" name="code" type="text">
                <div class="form-control-feedback">@if($errors->first('code')!=null) {{ $errors->first('code')}} @endif</div>
            </div>
            <button class="btn btn-primary btn-lg mt-15 btn-block btn-sign">যাচাই করুন</button>
        </div>
    </div>
</form>
<div class="text-center pt-3">
    <div class="text-sm text-lighter">
        Did not get an sms? <a href="{{url('session/verify/'.$user->id.'/resend')}}">পুনরায় পাঠান</a>.
    </div>
</div>
@stop