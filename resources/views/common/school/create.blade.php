<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-site card-white card-lg mb-4 card-driver-mandatory">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <form class="" method="POST" enctype='multipart/form-data' action="/{{$panel}}/panel/school/store">
                                    {{ csrf_field() }}
                                    <div class="col-sm-12 driver-description">
                                        <input type="hidden" name="union_id" value="{{$union->id}}">
                                        <div class="row dd-item">
                                            <div class="col-md-2">
                                                <div class="dd-name">Union</div>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control form-control-lg" type="text" value="{{$union->name}}" id="union" name="union" readonly="">
                                            </div>
                                        </div> 
                                        <div class="row dd-item">
                                            <div class="col-md-2">
                                                <div class="dd-name">Name</div>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control form-control-lg" type="text" value="" id="name" name="name" required="" autocomplete="off">
                                            </div>
                                        </div> 
                                        <div class="row dd-item">
                                            <div class="col-md-2">
                                                <div class="dd-name">Code</div>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control form-control-lg" type="text" value="" id="deviceid" name="deviceid"required="" autocomplete="off">
                                            </div>
                                        </div> 
                                        <div class="row dd-item">
                                            <div class="col-md-2">
                                                <div class="dd-name">Address</div>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control form-control-lg" type="text" value="" id="address" name="address" required="" autocomplete="off">
                                            </div>
                                        </div>  
                                        <div class="row dd-item">
                                            <div class="col-md-10 offset-lg-2">
                                                <button type="submit" class="btn btn-primary btn-lg fs-16 text-uppercase font-weight-semibold letter-spacing-1">Submit</button>
                                            </div>
                                        </div>                                  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>