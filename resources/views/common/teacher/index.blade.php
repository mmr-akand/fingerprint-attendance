<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-12">
                @if(Sentinel::getUser()->phone == 'superadmin')
                    <div class="text-right">
                        <a href="/{{$panel}}/panel/school/{{$school->id}}/edit" class="btn btn-primary">Edit School</a>
                    </div><br>
                    <div class="text-right">
                        <a href="/{{$panel}}/panel/school/{{$school->id}}/delete" class="btn btn-danger" onclick="return ConfirmDelete();">Delete School</a>
                    </div>
                @endif
                <div class="mb-4">
                    <ul class="list-inline mb-0">
                        <li>
                            <span><b>School Name:</b></span>
                            <span>{{$school->name ?? ''}}</span>
                        </li>
                        <li>
                            <span><b>School Code:</b></span>
                            <span>{{$school->deviceid ?? ''}}</span>
                        </li>
                        <li>
                            <span><b>School Address:</b></span>
                            <span>{{$school->address ?? ''}}</span>
                        </li>
                        <li>
                            <span><b>Pourosova/Union Name:</b></span>
                            <span>{{$school->union->name ?? ''}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="table-default has-datatable table-large table-responsive table-round table-td-vmiddle">
            <table id="driver-payments-table" class="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teacher Name</th>
                        <th>Designation</th>
                        <th>Phone Number</th>
                        <th>Attendance Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($teachers as $teacher)                   
                        <tr>
                            <td>
                                <div class="text-nowrap">
                                    {{$teacher->id ?? ''}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    <a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/{{$teacher->id}}">{{$teacher->user->name}}</a>
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    @if($teacher->is_head_teacher == 'yes')
                                        Head Teacher
                                    @else
                                        Assistant Teacher
                                    @endif
                                </div>
                            </td> 
                            <td>
                                <div class="text-nowrap">
                                    {{$teacher->user->phone ?? ''}}
                                </div>
                            </td> 
                            <td>
                                <div class="text-nowrap">
                                    {{$teacher->enrollid ?? ''}}
                                </div>
                            </td>  
                            <td>
                                <div class="text-nowrap">
                                    <a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/{{$teacher->id}}" class="btn btn-primary">Show</a>
                                    @if(Sentinel::getUser()->phone == 'superadmin')
                                        <a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/{{$teacher->id}}/edit" class="btn btn-primary">Edit</a>
                                    @endif
                                </div>
                            </td>           
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
<script>
    function ConfirmDelete()
    {
      var delCheck = confirm("Do you really want to delete this school?");
      if(delCheck)
        return true;
      else
        return false;
    }
</script>