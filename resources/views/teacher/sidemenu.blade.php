<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('teacher/panel/dashboard*') ? 'active' : '' }}"><a href="/teacher/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>

    <li class="aside-nav-item {{ Request::is('teacher/panel/school*') ? 'active' : '' }}"><a href="/teacher/panel/school/index"><i class="icofont icofont-university"></i> <span class="nav-text">Schools</span> </a></li>

    <li class="aside-nav-item {{ Request::is('teacher/panel/teacher*') ? 'active' : '' }}"><a href="/teacher/panel/teacher/index"><i class="icofont icofont-teacher"></i> <span class="nav-text">Teacher</span> </a></li>

    <!-- <li class="aside-nav-item {{ Request::is('teacher/panel/attendance*') ? 'active' : '' }}"><a href="/teacher/panel/attendance/present"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Attendances</span> </a></li> -->

    <li class="aside-nav-item nav-has-dropdown {{ Request::is('teacher/panel/attendance*') ? 'active' : '' }}">
        <a href="javascript:void(0)"><i class="icofont icofont-people"></i> <span class="nav-text">Attendance</span> </a>
        <ul class="aside-nav-sub">
            <li class="aside-nav-item {{ Request::is('/teacher/panel/attendance/present') ? 'active' : '' }} "><a href="/teacher/panel/attendance/present"> <span class="nav-text">Present</span> </a></li>
            <li class="aside-nav-item {{ Request::is('/teacher/panel/attendance/absent') ? 'active' : '' }}"><a href="/teacher/panel/attendance/absent"><span class="nav-text">Absent</span> </a></li>
        </ul>
    </li> 
</ul>