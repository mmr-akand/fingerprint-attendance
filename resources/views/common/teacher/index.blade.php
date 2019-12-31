<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4">
                    <ul class="list-inline mb-0">
                        <li>
                            <span><b>School Name:</b></span>
                            <span>{{$school->name ?? ''}}</span>
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
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>