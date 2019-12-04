<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('adpeo/panel/dashboard*') ? 'active' : '' }}"><a href="/adpeo/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Dashboard</span> </a></li>
    
    <li class="aside-nav-item {{ Request::is('adpeo/panel/school*') ? 'active' : '' }}"><a href="/adpeo/panel/school/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Schools</span> </a></li>

    <li class="aside-nav-item {{ Request::is('adpeo/panel/teacher*') ? 'active' : '' }}"><a href="/adpeo/panel/teacher/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Teachers</span> </a></li>

    <li class="aside-nav-item {{ Request::is('adpeo/panel/attendance*') ? 'active' : '' }}"><a href="/adpeo/panel/attendance/index"><i class="icofont icofont-dashboard"></i> <span class="nav-text">Attendances</span> </a></li>
</ul>