<ul class="aside-nav">
    <li class="aside-nav-item {{ Request::is('customer/panel/dashboard*') ? 'active' : '' }}"><a href="/customer/panel/dashboard"><i class="icofont icofont-dashboard"></i> <span class="nav-text">ড্যাশবোর্ড</span> </a></li>

    <li class="aside-nav-item"><a href="/customer/panel/bookings/create"><i class="icofont icofont-car"></i> <span class="nav-text">বুকিং করুন</span> </a></li>

    <li class="aside-nav-item {{ Request::is('customer/panel/bookings*') || Request::is('customer/panel/booking*') ? 'active' : '' }}"><a href="/customer/panel/bookings?filter=open"><i class="icofont icofont-calendar"></i> <span class="nav-text">বুকিং সমূহ</span> </a></li>

    <li class="aside-nav-item {{ Request::is('customer/panel/transactions*') ? 'active' : '' }}"><a href="/customer/panel/transactions "><i class="fa fa-money"></i> <span class="nav-text"> লেনদেন</span></a></li>

    <li class="aside-nav-item {{ Request::is('customer/panel/contact-us*') ? 'active' : '' }}"><a href="/customer/panel/contact-us"><i class="icofont icofont-comment"></i> <span class="nav-text">যোগাযোগ</span> </a></li>
    
    <li class="aside-nav-item {{ Request::is('customer/panel/profile*') ? 'active' : '' }}"><a href="/customer/panel/profile"><i class="icofont icofont-user-alt-4"></i> <span class="nav-text">প্রোফাইল </span> </a></li>
    
    <li class="aside-nav-item {{ Request::is('customer/panel/settings*') ? 'active' : '' }}"><a href="/customer/panel/settings/password"><i class="icofont icofont-settings"></i> <span class="nav-text">সেটিংস</span> </a></li>
</ul>