<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-site card-white card-lg mb-4 card-driver-mandatory">
                    <div class="card-header ">
                        <div class="row">
                            <div class=" col-md-5">
                                <div class="pl-4">
                                    <h4 class="dd-title color-primary">{{$school->name}}</h4>
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-5">
                                <div class="pl-4 text-right">
                                    <a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/index" class="btn btn-primary">Teacher List</a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <form class="" method="POST" enctype='multipart/form-data' action="/{{$panel}}/panel/teacher/store">
                                    {{ csrf_field() }}
                                    <div class="col-sm-12 driver-description">
                                        <input type="hidden" name="school_id" value="{{$school->id}}">
                                        <div class="row dd-item">
                                            <div class="col-md-4">
                                                <div class="dd-name">Teacher Name</div>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control form-control-lg" type="text" value="{{old('name')}}" id="name" name="name" required="" autocomplete="off">
                                            </div>
                                        </div>   
                                        <div class="row dd-item">
                                            <div class="col-md-4">
                                                <div class="dd-name">Designation</div>
                                            </div>
                                            <div class="col-md-8">
                                                <select id="designation" name="designation" class="form-control form-control-lg" required="">
                                                   <option value=""></option>
                                                   <option value="1">Head Teacher</option>
                                                   <option value="0">Assistant Teacher</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row dd-item">
                                            <div class="col-md-4">
                                                <div class="dd-name">Attendance Code</div>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control form-control-lg" type="text" value="{{old('enrollid')}}" id="enrollid" name="enrollid" required="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="row dd-item">
                                            <div class="col-md-4">
                                                <div class="dd-name">Phone</div>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control form-control-lg" type="text" value="" id="phone" name="phone" required="" minlength="11" autocomplete="off">
                                            </div>
                                        </div> 
                                        <div class="row dd-item">
                                            <div class="col-md-12 offset-lg-4">
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