<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('ateo/panel/dashboard*') ? 'active' : '' }}"><a href="/ateo/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>

    <li class="aside-nav-item {{ Request::is('ateo/panel/school*') ? 'active' : '' }}"><a href="/ateo/panel/school/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Schools</span> </a></li>

    <li class="aside-nav-item {{ Request::is('ateo/panel/teacher*') ? 'active' : '' }}"><a href="/ateo/panel/teacher/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Teachers</span> </a></li>

    <li class="aside-nav-item {{ Request::is('ateo/panel/attendance*') ? 'active' : '' }}"><a href="/ateo/panel/attendance/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Attendances</span> </a></li>
</ul>