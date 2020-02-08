<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-site card-white card-lg mb-4 card-driver-mandatory">
                    <div class="card-header ">
                        <div class="row">
                            <div class=" col-md-5">
                                <div class="pl-4">
                                    <h4 class="dd-title color-primary">{{$teacher->user->name}}</h4>
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-5">
                                <div class="pl-4 text-right">
                                    @if(Sentinel::getUser()->phone == 'superadmin')
                                        <a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/{{$teacher->id}}/edit" class="btn btn-primary">Edit</a>
                                    @endif
                                    <a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/index" class="btn btn-primary">Teacher List</a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="col-sm-12 driver-description">
                                    <div class="row dd-item">
                                        <div class="col-md-4">
                                            <div class="dd-name">Designation</div>
                                        </div>
                                        <div class="col-md-8">
                                            @if($teacher->is_head_teacher == 'no')
                                                <div class="dd-text">Assistant Teacher</div>
                                            @else
                                                <div class="dd-text">Head Teacher</div>
                                            @endif
                                        </div>
                                    </div> 
                                    <div class="row dd-item">
                                        <div class="col-md-4">
                                            <div class="dd-name">Phone</div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="dd-text">{{$teacher->user->phone}}</div>
                                        </div>
                                    </div>  
                                    <div class="row dd-item">
                                        <div class="col-md-4">
                                            <div class="dd-name">Attendance Code</div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="dd-text">{{$teacher->enrollid ?? ''}}</div>
                                        </div>
                                    </div> 
                                    <div class="row dd-item">
                                        <div class="col-md-4">
                                            <div class="dd-name">School Name</div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="dd-text">{{$teacher->school->name ?? ''}}</div>
                                        </div>
                                    </div> 
                                    <div class="row dd-item">
                                        <div class="col-md-4">
                                            <div class="dd-name">School Address</div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="dd-text">{{$teacher->school->address ?? ''}}</div>
                                        </div>
                                    </div> 
                                    <div class="row dd-item">
                                        <div class="col-md-4">
                                            <div class="dd-name">Union Name</div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="dd-text">{{$teacher->school->union->name ?? ''}}</div>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>