<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar top-navbar fixed-top navbar-expand-md navbar-dark">
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto mt-md-0">
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up  waves-effect " href="javascript:void(0)"><i class="fas fa-bars"></i></a></li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li>
                    <li class="nav-item fa-bars-text mt-3">{{Session::get('name')}}{{Cookie::get('name')}}</li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item"><a  class="normal-btn btn-sm btn" href="{{'/logout'}}">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li> <a id="SideMenu1" class="sideNavItem" href="{{url('classroom')}}" ><span> <i class="fa fa-home"></i> </span><span class="hide-menu"> Home</span></a></li>
                    <li> <a id="SideMenu1" class="sideNavItem" href="{{url('/')}}" ><span> <i class="fa fa-globe"></i> </span><span class="hide-menu"> Main Site</span></a></li>
                    <li> <a class="sideNavItem" href="{{url('/files')}}" ><span> <i class="fa fa-folder"></i></span><span class="hide-menu"> Files</span></a></li>
                    <li> <a class="sideNavItem" href="{{url('/ReviewIndex')}}" ><span> <i class="fa fa-comments"></i></span><span class="hide-menu"> Review</span></a></li>
                    <li> <a class="sideNavItem" href="{{url('/profile')}}" ><span> <i class="fa fa-user-circle"></i></span><span class="hide-menu"> Profile</span></a></li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="page-wrapper">

