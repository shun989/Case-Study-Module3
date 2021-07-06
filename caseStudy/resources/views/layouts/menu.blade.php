<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
{{--<div>--}}
{{--    @guest--}}
{{--        @if (Route::has('login'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('login') }}">{{ __('language.Login') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}

{{--        @if (Route::has('register'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('register') }}">{{ __('language.Register') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    @else--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">--}}
{{--                <div class="sidebar-brand-icon rotate-n-15">--}}
{{--                    <i class="fas fa-laugh-wink"></i>--}}
{{--                </div>--}}
{{--                <div class="sidebar-brand-text mx-3">Hello {{ Auth::user()->name }}</div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--@endguest--}}
{{--</div>--}}
<!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{__('language.Home')}}</span></a>
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{__('language.User page')}}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.index')}}" data-toggle="collapse"
           data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-folder"></i>
            <span>{{__('language.Pages')}}</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">{{__('language.LOGIN SCREEN:')}}</h6>
                <a class="collapse-item" href="">{{__('language.Login')}}</a>
                <a class="collapse-item" href="{{route('admin.createForm')}}">{{__('language.Register')}}</a>
                <a class="collapse-item" href="forgot-password.html">{{__('language.Forgot Password')}}</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="fas fa-table"></i>
            <span>{{__('language.Tables')}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.showCard')}}">
            <i class="fas fa-table"></i>
            <span>{{__('language.Cards')}}</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center language">
        <a class="change-language" href="{{route('view.change-language',['en'])}}">{{__('language.English')}}</a>
        <span>|</span>
        <a class="change-language" href="{{route('view.change-language',['vi'])}}">{{__('language.Vietnam')}}</a>
    </div>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->


<!-- End of Page Wrapper -->
