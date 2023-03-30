<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a >
            <img src="{{ asset('assets/logo-dark.png') }}" height="50px" alt="{{ config('app.name', 'Forty Seven App') }}">
        </a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="{{route('admin.dashboard')}}"><img src="{{asset('assets/user-logo.png')}}" width="25" alt="{{auth()->guard('admin')->user()->name ?? 'Admin'}}"></a>
                    <div class="detail">
                        <h4>{{auth()->guard('admin')->user()->name ?? 'Admin'}}</h4>
                        <small>{{auth()->guard('admin')->user()->name ?? 'Admin'}}</small>                        
                    </div>
                </div>
            </li>
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::is('admin/apps') || Request::is('admin/app/create') ? 'active' : '' }}"><a href="{{route('admin.apps')}}"><i class="zmdi zmdi-apps"></i><span>Apps</span></a></li>
            <li class="{{ Request::is('admin/contacts') ? 'active' : '' }}"><a href="{{route('admin.contacts')}}"><i class="zmdi zmdi-hc-fw"></i><span>Contacts</span></a></li>
            <li class="open_top"><a  class="universalClickEvent" data-title="Logout" data-body="Are you sure you want to logout ?" data-url="{{route('admin.logout')}}"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
        </ul>
    </div>
</aside>
