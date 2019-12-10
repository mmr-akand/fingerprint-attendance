<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('ateo/panel/dashboard*') ? 'active' : '' }}"><a href="/ateo/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>

    <li class="aside-nav-item {{ Request::is('ateo/panel/school*') ? 'active' : '' }}"><a href="/ateo/panel/school/index"><i class="icofont icofont-university"></i> <span class="nav-text">Schools</span> </a></li>

    <li class="aside-nav-item {{ Request::is('ateo/panel/teacher*') ? 'active' : '' }}"><a href="/ateo/panel/teacher/index"><i class="icofont icofont-teacher"></i> <span class="nav-text">Teachers</span> </a></li>

    <!-- <li class="aside-nav-item {{ Request::is('ateo/panel/attendance*') ? 'active' : '' }}"><a href="/ateo/panel/attendance/present"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Attendances</span> </a></li> -->

    <li class="aside-nav-item nav-has-dropdown {{ Request::is('ateo/panel/attendance*') ? 'active' : '' }}">
        <a href="javascript:void(0)"><i class="icofont icofont-people"></i> <span class="nav-text">Attendance</span> </a>
        <ul class="aside-nav-sub">
            <li class="aside-nav-item {{ Request::is('/ateo/panel/attendance/present') ? 'active' : '' }} "><a href="/ateo/panel/attendance/present"> <span class="nav-text">Present</span> </a></li>
            <li class="aside-nav-item {{ Request::is('/ateo/panel/attendance/absent') ? 'active' : '' }}"><a href="/ateo/panel/attendance/absent"><span class="nav-text">Absent</span> </a></li>
        </ul>
    </li> 
</ul>