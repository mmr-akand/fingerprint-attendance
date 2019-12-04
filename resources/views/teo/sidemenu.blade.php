<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('teo/panel/dashboard*') ? 'active' : '' }}"><a href="/teo/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>

    <li class="aside-nav-item {{ Request::is('teo/panel/school*') ? 'active' : '' }}"><a href="/teo/panel/school/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Schools</span> </a></li>

    <li class="aside-nav-item {{ Request::is('teo/panel/teacher*') ? 'active' : '' }}"><a href="/teo/panel/teacher/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Teachers</span> </a></li>

    <li class="aside-nav-item {{ Request::is('teo/panel/attendance*') ? 'active' : '' }}"><a href="/teo/panel/attendance/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Attendances</span> </a></li>
</ul>