<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4">
                    <ul class="list-inline mb-0">
                        <li>
                            <span><b>Teacher Name:</b></span>
                            <span><a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/{{$teacher->id}}">{{$teacher->user->name ?? ''}}</a></span>
                        </li>
                        <li>
                            <span><b>School Name:</b></span>
                            <span><a href="/{{$panel}}/panel/school/{{$school->id}}/teacher/index">{{$school->name ?? ''}}</a></span>
                        </li>
                        <li>
                            <span><b>Pourosova/Union Name:</b></span>
                            <span><a href="/{{$panel}}/panel/union/{{$school->union->id}}/school">{{$school->union->name ?? ''}}</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="table-default has-datatable table-large table-responsive table-round table-td-vmiddle">
            <table id="" class="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Entry</th>
                        <th>Departure</th>
                    </tr>
                </thead>
                <tbody>    
                    @foreach($histories as $history)                
                        <tr>
                            <td>
                                <div class="text-nowrap">
                                    {{date('d/m/Y', strtotime($history->date))}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    {{date('g:i A', strtotime($history->entry))}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    @if($history->departure)  
                                        {{date('g:i A', strtotime($history->departure))}}
                                    @else
                                        &nbsp;
                                    @endif
                                </div>
                            </td>        
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $histories->links() }}
        </div>
    </div>
</div>