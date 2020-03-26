<div class="row">
    <div class="col-sm-12">
        <form action="/{{$panel}}/panel/attendance/absent" class="signup-form form-small-space" id="signup-form" method="GET">
            <div class="row">
                <div class="col-md-1 text-center">
                    <span class="text-center">Date</span>
                </div>
                <div class="col-md-3">
                    <div class="pl-4">
                        <input class="form-control date" type="text" name="date" value="{{$appends['date']}}" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pl-4">
                        <input class="form-control btn btn-warning" type="submit" name="search" value="Search">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="pl-4">
                        <a class="form-control btn btn-success" href="/{{$panel}}/panel/attendance/absent">Refresh</a>
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
            {{ $absent_teachers->appends($appends)->links() }}
        </div>
    </div>
</div>

@section('footer')
<script type="text/javascript">
    $(document).ready(function() {    
        $(function() {
            $('.date').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        });
    });
</script>
@stop