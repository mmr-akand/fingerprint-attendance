<div class="row">
    <div class="col-sm-12">
        <div class="table-default has-datatable table-large table-responsive table-round table-td-vmiddle">
            <table id="driver-payments-table" class="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teacher Name</th>
                        <th>School Name</th>
                    </tr>
                </thead>
                <tbody>    
                    @foreach($absent_teachers as $teacher)                
                        <tr>
                            <td>
                                <div class="text-nowrap">
                                    {{$teacher->id ?? ''}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    <a href="/{{$panel}}/panel/school/{{$teacher->school->id}}/teacher/{{$teacher->id}}">{{$teacher->user->name}}</a>
                                </div>
                            </td> 
                            <td>
                                <div class="text-nowrap">
                                    @if($panel=='teacher')
                                        {{$teacher->school->name ?? ''}}
                                    @else
                                        <a href="/{{$panel}}/panel/school/{{$teacher->school->id}}/teacher/index">{{$teacher->school->name ?? ''}}</a>
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