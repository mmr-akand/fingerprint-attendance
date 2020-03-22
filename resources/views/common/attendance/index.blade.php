<div class="row">
    <div class="col-sm-12">
        <form action="/{{$panel}}/panel/attendance/present" class="signup-form form-small-space" id="signup-form" method="GET">
            <div class="row">
                <div class="col-md-3">
                    <div class="pl-4">
                        <input class="form-control from-date" type="text" name="dateFrom" value="{{$appends['dateFrom']}}" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-1 text-center">
                    <span class="text-center">To</span>
                </div>
                <div class="col-md-3">
                    <div class="pl-4">
                        <input class="form-control to-date" type="text" name="dateTo" value="{{$appends['dateTo']}}" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pl-4">
                        <input class="form-control btn btn-warning" type="submit" name="search" value="Search">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="pl-4">
                        <a class="btn btn-success" href="/{{$panel}}/panel/attendance/present">Refresh</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
    <br>
    <div class="col-sm-12">
        <div class="table-default has-datatable table-large table-responsive table-round table-td-vmiddle">
            <table id="" class="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teacher Name</th>
                        <th>Date</th>
                        <th>Entry Time</th>
                        <th>Departure Time</th>
                        <th>School Name</th>
                    </tr>
                </thead>
                <tbody>    
                    @foreach($attendances as $attendance)                
                        <tr>
                            <td>
                                <div class="text-nowrap">
                                    {{$attendance->id ?? ''}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    <a href="/{{$panel}}/panel/school/{{$attendance->school->id}}/teacher/{{$attendance->teacher->id}}">{{$attendance->teacher->user->name}}</a>
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    {{date('d/m/Y', strtotime($attendance->date))}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">                                    
                                    {{date('g:i A', strtotime($attendance->entry))}}
                                </div>
                            </td>  
                            <td>
                                <div class="text-nowrap">  
                                    @if($attendance->departure)  
                                        {{date('g:i A', strtotime($attendance->departure))}}
                                    @else
                                        &nbsp;
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    @if($panel=='teacher')
                                        {{$attendance->school->name ?? ''}}
                                    @else
                                        <a href="/{{$panel}}/panel/school/{{$attendance->school->id}}/teacher/index">{{$attendance->school->name ?? ''}}</a>
                                    @endif
                                </div>
                            </td>          
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $attendances->appends($appends)->links() }}
        </div>
    </div>
</div>

@section('footer')
<script type="text/javascript">
    $(document).ready(function() {    
        $(function() {
            $('.from-date').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $('.to-date').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        });
    });
</script>
@stop