<div class="row">
    <div class="col-sm-12">
        <div class="table-default has-datatable table-large table-responsive table-round table-td-vmiddle">
            <table id="driver-payments-table" class="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>School Name</th>
                        <th>Number of Teachers</th>
                        <!-- <th>Union Name</th> -->
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
                                    {{$school->name ?? ''}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    {{count($school->teachers)}}
                                </div>
                            </td>
                            <!-- <td>
                                <div class="text-nowrap">
                                    {{$school->union_name ?? ''}}
                                </div>
                            </td>  -->            
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>