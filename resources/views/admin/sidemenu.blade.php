<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('admin/panel/dashboard*') ? 'active' : '' }}"><a href="/admin/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>

    <li class="aside-nav-item {{ Request::is('admin/panel/school*') ? 'active' : '' }}"><a href="/admin/panel/school/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Schools</span> </a></li>

    <li class="aside-nav-item {{ Request::is('admin/panel/teacher*') ? 'active' : '' }}"><a href="/admin/panel/teacher/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Teachers</span> </a></li>

    <li class="aside-nav-item {{ Request::is('admin/panel/attendance*') ? 'active' : '' }}"><a href="/admin/panel/attendance/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Attendances</span> </a></li>
</ul>