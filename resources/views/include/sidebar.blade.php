<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{route('dashboard')}}">
            <div class="logo-img">
               {{-- <img height="30" src="{{ asset('img/logo_white.png')}}" class="header-brand-img" title="RADMIN"> --}}
               {{-- <h3 class="header-brand-img"> E-Kopi </h3> --}}
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    @php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
    @endphp

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item {{ ($segment1 == 'dashboard') ? 'active' : '' }}">
                    <a href="{{route('dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>{{ __('Dashboard')}}</span></a>
                </div>
                <div class="nav-lavel"> Data Master </div>
                <div class="nav-item  has-sub">
                    <a href="#"><i class="ik ik-layout"></i><span> Koperasi </a>
                    <div class="submenu-content">
                        <a href="{{url('koperasi')}}" class="menu-item" >Koperasi</a>
                        <a href="{{url('koperasi/tambah')}}" class="menu-item" >Tambah Koperasi</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="{{url('input/pilih-koperasi')}}"><i class="ik ik-inbox"></i><span> Inputan Sertifikat </span> </a>
                </div>
                <div class="nav-item  has-sub">
                    <a href="#"><i class="ik ik-file-text"></i><span> Statistik </a>
                    <div class="submenu-content">
                        <a href="{{url('koperasi/tatakelola')}}" class="menu-item" > Tata Kelola </a>
                        <a href="{{url('koperasi/profileresiko')}}" class="menu-item" > Profile Resiko </a>
                        <a href="{{url('koperasi/datakeuangan')}}" class="menu-item" > Data Keuangan </a>
                        <a href="{{url('koperasi/permodalan')}}" class="menu-item" > Permodalan </a>
                        <a href="{{url('koperasi/tabelkesehatan')}}" class="menu-item" > Tabel Kesehatan </a>
                    </div>
                </div>
                <div class="nav-lavel">{{ __('Layouts')}} </div>
                <div class="nav-item {{ ($segment1 == 'pos') ? 'active' : '' }}">
                    <a href="{{url('inventory')}}"><i class="ik ik-shopping-cart"></i><span>{{ __('Inventory')}}</span> <span class=" badge badge-success badge-right">{{ __('New')}}</span></a>
                </div>
                <div class="nav-item {{ ($segment1 == 'pos') ? 'active' : '' }}">
                    <a href="{{url('pos')}}"><i class="ik ik-printer"></i><span>{{ __('POS')}}</span> <span class=" badge badge-success badge-right">{{ __('New')}}</span></a>
                </div>
                <div class="nav-item {{ ($segment1 == 'users' || $segment1 == 'roles'||$segment1 == 'permission' ||$segment1 == 'user') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>{{ __('Adminstrator')}}</span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                        @can('manage_user')
                        <a href="{{url('users')}}" class="menu-item {{ ($segment1 == 'users') ? 'active' : '' }}">{{ __('Users')}}</a>
                        <a href="{{url('user/create')}}" class="menu-item {{ ($segment1 == 'user' && $segment2 == 'create') ? 'active' : '' }}">{{ __('Add User')}}</a>
                         @endcan
                         <!-- only those have manage_role permission will get access -->
                        @can('manage_roles')
                        <a href="{{url('roles')}}" class="menu-item {{ ($segment1 == 'roles') ? 'active' : '' }}">{{ __('Roles')}}</a>
                        @endcan
                        <!-- only those have manage_permission permission will get access -->
                        @can('manage_permission')
                        <a href="{{url('permission')}}" class="menu-item {{ ($segment1 == 'permission') ? 'active' : '' }}">{{ __('Permission')}}</a>
                        @endcan
                    </div>
                </div>
        </div>
    </div>
</div>
