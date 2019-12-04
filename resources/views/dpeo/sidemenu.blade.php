<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('dpeo/panel/dashboard*') ? 'active' : '' }}"><a href="/dpeo/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>

    <li class="aside-nav-item {{ Request::is('dpeo/panel/school*') ? 'active' : '' }}"><a href="/dpeo/panel/school/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Schools</span> </a></li>

    <li class="aside-nav-item {{ Request::is('dpeo/panel/teacher*') ? 'active' : '' }}"><a href="/dpeo/panel/teacher/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Teachers</span> </a></li>

    <li class="aside-nav-item {{ Request::is('dpeo/panel/attendance*') ? 'active' : '' }}"><a href="/dpeo/panel/attendance/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Attendances</span> </a></li>
</ul>