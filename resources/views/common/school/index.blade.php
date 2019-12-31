<div class="row">
    <div class="col-sm-12">
        <div class="table-default has-datatable table-large table-responsive table-round table-td-vmiddle">
            <table id="driver-payments-table" class="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>School Name</th>
                        <th>School Code</th>
                        <th>Number of Teachers</th>
                        <th>Pourosova/Union Name</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($schools as $school)                   
                        <tr>
                            <td>
                                <div class="text-nowrap">
                                    {{$school->id ?? ''}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    <a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/index">{{$school->name ?? ''}}</a>
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    {{$school->deviceid ?? ''}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    {{count($school->teachers)}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    {{$school->union->name ?? ''}}
                                </div>
                            </td>          
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>