<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('teacher/panel/dashboard*') ? 'active' : '' }}"><a href="/teacher/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>

    <li class="aside-nav-item {{ Request::is('teacher/panel/school*') ? 'active' : '' }}"><a href="/teacher/panel/school/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Schools</span> </a></li>

    <li class="aside-nav-item {{ Request::is('teacher/panel/teacher/panel*') ? 'active' : '' }}"><a href="/teacher/panel/teacher/panel/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">teacher/panels</span> </a></li>

    <li class="aside-nav-item {{ Request::is('teacher/panel/attendance*') ? 'active' : '' }}"><a href="/teacher/panel/attendance/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Attendances</span> </a></li>
</ul>