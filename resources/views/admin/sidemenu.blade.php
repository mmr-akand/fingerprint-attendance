<?php
use App\Union;
$unions = Union::get();
?>

<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('admin/panel/dashboard*') ? 'active' : '' }}"><a href="/admin/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>

    <li class="aside-nav-item nav-has-dropdown {{ Request::is('admin/panel/union*') ? 'active' : '' }}">
        <a href="javascript:void(0)"><i class="icofont icofont-gift"></i> <span class="nav-text">Unions & Schools</span> </a>
        <ul class="aside-nav-sub">
            @foreach($unions as $union)
                <li class="aside-nav-item {{ Request::is('/admin/panel/union') ? 'active' : '' }} "><a href="/admin/panel/union/{{$union->id}}/school"> <span class="nav-text">{{$union->name}}</span> </a></li>
            @endforeach
        </ul>
    </li> 

    <!-- <li class="aside-nav-item {{ Request::is('admin/panel/school/index*') ? 'active' : '' }}"><a href="/admin/panel/school/index"><i class="icofont icofont-university"></i> <span class="nav-text">All Schools</span> </a></li> -->

    <!-- <li class="aside-nav-item {{ Request::is('admin/panel/teacher*') ? 'active' : '' }}"><a href="/admin/panel/teacher/index"><i class="icofont icofont-teacher"></i> <span class="nav-text">All Teachers</span> </a></li> -->

    <li class="aside-nav-item nav-has-dropdown {{ Request::is('admin/panel/attendance*') ? 'active' : '' }}">
        <a href="javascript:void(0)"><i class="icofont icofont-people"></i> <span class="nav-text">Attendance</span> </a>
        <ul class="aside-nav-sub">
            <li class="aside-nav-item {{ Request::is('/admin/panel/attendance/present') ? 'active' : '' }} "><a href="/admin/panel/attendance/present"> <span class="nav-text">Present</span> </a></li>
            <li class="aside-nav-item {{ Request::is('/admin/panel/attendance/absent') ? 'active' : '' }}"><a href="/admin/panel/attendance/absent"><span class="nav-text">Absent</span> </a></li>
        </ul>
    </li> 

</ul>