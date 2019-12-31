<?php
use App\Union;
$unions = Union::get();
?>

<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('adpeo/panel/dashboard*') ? 'active' : '' }}"><a href="/adpeo/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>

    <li class="aside-nav-item nav-has-dropdown {{ Request::is('adpeo/panel/union*') ? 'active' : '' }}">
        <a href="javascript:void(0)"><i class="icofont icofont-gift"></i> <span class="nav-text">Unions & Schools</span> </a>
        <ul class="aside-nav-sub">
            @foreach($unions as $union)
                <li class="aside-nav-item {{ Request::is('/adpeo/panel/union') ? 'active' : '' }} "><a href="/adpeo/panel/union/{{$union->id}}/school"> <span class="nav-text">{{$union->name}}</span> </a></li>
            @endforeach
        </ul>
    </li> 

    <li class="aside-nav-item {{ Request::is('adpeo/panel/school/index*') ? 'active' : '' }}"><a href="/adpeo/panel/school/index"><i class="icofont icofont-university"></i> <span class="nav-text">All Schools</span> </a></li>

    <!-- <li class="aside-nav-item {{ Request::is('adpeo/panel/teacher*') ? 'active' : '' }}"><a href="/adpeo/panel/teacher/index"><i class="icofont icofont-teacher"></i> <span class="nav-text">All Teachers</span> </a></li> -->

    <li class="aside-nav-item nav-has-dropdown {{ Request::is('adpeo/panel/attendance*') ? 'active' : '' }}">
        <a href="javascript:void(0)"><i class="icofont icofont-people"></i> <span class="nav-text">Attendance</span> </a>
        <ul class="aside-nav-sub">
            <li class="aside-nav-item {{ Request::is('/adpeo/panel/attendance/present') ? 'active' : '' }} "><a href="/adpeo/panel/attendance/present"> <span class="nav-text">Present</span> </a></li>
            <li class="aside-nav-item {{ Request::is('/adpeo/panel/attendance/absent') ? 'active' : '' }}"><a href="/adpeo/panel/attendance/absent"><span class="nav-text">Absent</span> </a></li>
        </ul>
    </li> 

</ul>