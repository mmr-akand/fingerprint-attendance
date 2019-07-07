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
                            <div>
                                ছবি
                            </div>
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
                            <div class="form-group row @if($errors->first('national_id')!=null) has-danger @endif"">
                                <label for="national_id" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">জাতীয় পরিচয় পত্র নং <span class="required-star">*</span></label>
                               
                                <div class="col-md-12 col-lg-8">     
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <input class="form-control form-control-lg like-field " type="text" value="{{old('national_id',$profile->user->national_id)}}" id="national_id" name="national_id">
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
                            <div class="form-group row @if($errors->first('company_name')!=null) has-danger @endif"">
                                <label for="comapny_name" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">কোম্পানি</label>
                                <div class="col-md-12 col-lg-8">
                                    <input class="form-control form-control-lg like-field " type="text" value="{{old('company_name',$profile->company_name)}}" id="company_name" name="company_name">
                                    <div class="form-control-feedback">@if($errors->first('company_name')!=null) {{ $errors->first('company_name')}} @endif</div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('manager_name')!=null) has-danger @endif"">
                                <label for="manager_name" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">ম্যানেজারের নাম</label>
                                <div class="col-md-12 col-lg-8">
                                    <input class="form-control form-control-lg like-field " type="text" value="{{old('manager_name',$profile->manager_name)}}" id="manager_name" name="manager_name">
                                    <div class="form-control-feedback"></div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('manager_phone')!=null) has-danger @endif"">
                                <label for="manager_phone" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">ম্যানেজারের ফোন</label>
                                <div class="col-md-12 col-lg-8">
                                    <input class="form-control form-control-lg like-field " type="text" value="{{old('manager_phone',$profile->manager_phone)}}" id="manager_phone" name="manager_phone">
                                    <div class="form-control-feedback"></div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('ownership_card_number')!=null) has-danger @endif"">
                                <label for="ownership_card_number" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">মালিকানা কার্ড</label>                               
                                <div class="col-md-12 col-lg-8">     
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <input class="form-control form-control-lg like-field " type="text" value="{{old('ownership_card_number',$profile->ownership_card_number)}}" id="ownership_card_number" name="ownership_card_number">
                                            <div class="form-control-feedback">@if($errors->first('ownership_card_number')!=null) {{ $errors->first('ownership_card_number')}} @endif</div>
                                        </div>
                                        <div class="col-sm-1">
                                            ছবি
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="upload-styled-image upload-styled-image-40p mb-2">
                                                <div class="uploaded-image uploaded-here" style="background-image: url('{{Storage::url($profile->ownership_card_picture)}}');"></div>
                                                <div class="input-file">
                                                    <input class="file-input" type="file" name="ownership_card_picture" id="ownership_card_picture">
                                                    <span class="upload-icon">
                                                        <i class="icofont icofont-upload-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                            <div class="form-group row @if($errors->first('bank_name')!=null) has-danger @endif"">
                                <label for="bank_name" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">ব্যাংকের নাম</label>
                                <div class="col-md-12 col-lg-8">
                                    <input class="form-control form-control-lg like-field " type="text" value="{{old('bank_name',$profile->bank_name)}}" id="bank_name" name="bank_name">
                                    <div class="form-control-feedback">@if($errors->first('bank_name')!=null) {{ $errors->first('bank_name')}} @endif</div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('bank_branch')!=null) has-danger @endif"">
                                <label for="bank_branch" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">ব্যাংকের ব্রাঞ্চ</label>
                                <div class="col-md-12 col-lg-8">
                                    <input class="form-control form-control-lg like-field " type="text" value="{{old('bank_branch',$profile->bank_branch)}}" id="bank_branch" name="bank_branch">
                                    <div class="form-control-feedback">@if($errors->first('bank_branch')!=null) {{ $errors->first('bank_branch')}} @endif</div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('account_number')!=null) has-danger @endif"">
                                <label for="account_number" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">ব্যাংকের অ্যাকাউন্ট নং</label>
                                <div class="col-md-12 col-lg-8">
                                    <input class="form-control form-control-lg like-field " type="text" value="{{old('account_number',$profile->account_number)}}" id="account_number" name="account_number">
                                    <div class="form-control-feedback">@if($errors->first('account_number')!=null) {{ $errors->first('account_number')}} @endif</div>
                                </div>
                            </div>
                            <div class="form-group row @if($errors->first('address')!=null) has-danger @endif"">
                                <label for="addressa    ``" class="col-md-12 col-lg-4 col-form-label col-form-label-lg-custom col-form-label-md-max-full lable-site needed">ঠিকানা <span class="required-star">*</span></label>
                                <div class="col-md-12 col-lg-8">
                                    <textarea class="form-control form-control-lg like-field " type="text" id="address" name="address">{{old('address',$profile->user->address)}}</textarea>
                                    <div class="form-control-feedback">@if($errors->first('address')!=null) {{ $errors->first('address')}} @endif</div>
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