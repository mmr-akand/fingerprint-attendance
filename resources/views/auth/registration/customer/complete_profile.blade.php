@extends('auth.layout_extra')


@section('content-header')
<div class="page-header-content">
    <div class="page-header-meta">
        <div class="page-header-cell">
            <h1 class="title">অনুগ্রহপূর্বক আপনার প্রোফাইল সম্পূর্ণ করুন</h1>
        </div>
    </div>
</div>
@stop

@section('content-body')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xxl-8 offset-xxl-2">
        <div class="wagon wagon-huge wagon-borderd-dashed rounded">
            <div class="wagon-header">
                <div class="wh-col">
                    <h4 class="wh-title">১.  ব্যাক্তিগত তথ্য</h4>
                </div>
                <div class="wh-col">
                    <div class="wh-meta">
                    </div>
                </div>
            </div>
            <div class="wagon-body">
                <form class="" method="POST" enctype="multipart/form-data" action="" >
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <div>ছবি</div>
                            <div class="upload-styled-image rounded-circle" style="width: 120px; height: 120px;">
                                <div class="uploaded-image uploaded-here" style="background-image: url('{{Storage::url($profile->user->thumb_photo)}}');"></div>
                                <div class="input-file">
                                    <input type="file" name="photo" class="file-input">
                                    <span class="upload-icon">
                                        <i class="icofont icofont-upload-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-9">
                            <!--
                            <div class="form-group row @if($errors->first('name')!=null) has-danger @endif">
                                <label for="name" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">Name</label>
                                <div class="col-md-12 col-lg-8">
                                    <input class="form-control form-control-lg like-field form-control-danger" type="text" value="{{old('name', $profile->user->name)}}" id="name" name="name" disabled>
                                    <div class="form-control-feedback">@if($errors->first('name')!=null) {{ $errors->first('name')}} @endif</div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('phone')!=null) has-danger @endif"">
                                <label for="phone" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">Phone</label>
                                <div class="col-md-12 col-lg-8">
                                    <input class="form-control form-control-lg like-field form-control-danger" type="text" value="{{old('phone', $profile->user->phone)}}" id="phone" name="phone" disabled>
                                    <div class="form-control-feedback">@if($errors->first('phone')!=null) {{ $errors->first('phone')}} @endif</div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('email')!=null) has-danger @endif"">
                                <label for="email" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">Email</label>
                                <div class="col-md-12 col-lg-8">
                                    <input class="form-control form-control-lg like-field form-control-danger" type="email" value="{{old('email',$profile->user->email)}}" id="email" name="email" disabled>
                                    <div class="form-control-feedback">@if($errors->first('email')!=null) {{ $errors->first('email')}} @endif</div>
                                </div>
                            </div>
                            -->
                            <div class="form-group row @if($errors->first('national_id')!=null) has-danger @endif"">
                                <label for="national_id" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">জাতীয় পরিচয় পত্র নং</label>
                               
                                <div class="col-md-12 col-lg-8">     
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <input class="form-control form-control-lg like-field" type="text" value="{{old('national_id',$profile->user->national_id)}}" id="national_id" name="national_id">
                                            <div class="form-control-feedback">@if($errors->first('national_id')!=null) {{ $errors->first('national_id')}} @endif</div>
                                        </div>
                                        <div class="col-sm-1">
                                            ছবি
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="upload-styled-image upload-styled-image-40p mb-2">
                                                <div class="uploaded-image uploaded-here" style="background-image: url('{{Storage::url($profile->user->national_id_photo)}}');"></div>
                                                <div class="input-file">
                                                    <input class="file-input" type="file" name="national_id_photo" id="national_id_photo">
                                                    <span class="upload-icon">
                                                        <i class="icofont icofont-upload-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('address')!=null) has-danger @endif"">
                                <label for="address" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">ঠিকানা</label>
                                <div class="col-md-12 col-lg-8">
                                    <textarea class="form-control form-control-lg like-field" type="text" id="address" name="address">{{old('address',$profile->user->address)}}</textarea>
                                    <div class="form-control-feedback">@if($errors->first('address')!=null) {{ $errors->first('address')}} @endif</div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('about')!=null) has-danger @endif"">
                                <label for="about" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">নিজ সম্পর্কিত </label>
                                <div class="col-md-12 col-lg-8">
                                    <textarea class="form-control form-control-lg like-field" type="text" id="about" name="about">{{old('about',$profile->about)}}</textarea>
                                    <div class="form-control-feedback">@if($errors->first('about')!=null) {{ $errors->first('about')}} @endif</div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 col-lg-8 offset-lg-4">
                                    <button type="submit" class="btn btn-primary btn-lg fs-16 text-uppercase font-weight-semibold letter-spacing-1">জমা করুন</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop