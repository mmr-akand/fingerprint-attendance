<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-site card-white card-lg mb-4 card-driver-mandatory">
                    <div class="card-header ">
                        <div class="row">
                            <div class=" col-md-5">
                                <div class="pl-4">
                                    <!-- <h4 class="dd-title color-primary">{{$school->name}}</h4> -->
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-5">
                                <div class="pl-4 text-right">
                                    <a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/index" class="btn btn-primary">Details</a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <form class="" method="POST" enctype='multipart/form-data' action="/{{$panel}}/panel/school/{{$school->id}}/edit">
                                    {{ csrf_field() }}
                                    <div class="col-sm-12 driver-description">
                                        <div class="row dd-item">
                                            <div class="col-md-2">
                                                <div class="dd-name">Name</div>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control form-control-lg" type="text" value="{{$school->name}}" id="name" name="name">
                                            </div>
                                        </div> 
                                        <div class="row dd-item">
                                            <div class="col-md-2">
                                                <div class="dd-name">Code</div>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control form-control-lg" type="text" value="{{$school->deviceid}}" id="deviceid" name="deviceid">
                                            </div>
                                        </div> 
                                        <div class="row dd-item">
                                            <div class="col-md-2">
                                                <div class="dd-name">Address</div>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control form-control-lg" type="text" value="{{$school->address}}" id="address" name="address">
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