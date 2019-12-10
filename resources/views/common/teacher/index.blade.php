<div class="row">
    <div class="col-sm-12">
        <div class="table-default has-datatable table-large table-responsive table-round table-td-vmiddle">
            <table id="driver-payments-table" class="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teacher Name</th>
                        <th>Phone Number</th>
                        <th>Designation</th>
                        <th>School Name</th>
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
                                    {{$teacher->user->name ?? ''}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    {{$teacher->user->phone ?? ''}}
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
                                    {{$teacher->school->name ?? ''}}
                                </div>
                            </td>           
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>