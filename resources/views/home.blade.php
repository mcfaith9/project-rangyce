@extends('layouts.app')
@section('content')
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-light-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="fa fa-search fa-2x"></i>
    </div>
    <input type="text" placeholder="START TYPING..." id="search-criteria">
    <div class="close-search">
        <i class="fa fa-times"></i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">                
            </a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="#">RANGYCE</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li>
                    <a href="javascript:void(0);" class="js-search" data-close="true">
                        <i class="material-icons">search</i>
                    </a>
                </li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count bell-counter"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu notification-menu">     
                                <li>
                                    <a href="javascript:void(0);" class="firstTimeLogin" {{is_null(Auth::user()->first_name) ? 'data-toggle=modal data-target=#firstTimeLogin' : ''}} style="padding: 3%!important;">
                                        <div class="menu-info">
                                            <h4 style="white-space: normal; overflow: hidden;">
                                                Welcome {{Auth::user()->username}}! Lets get started click here to edit your profile.
                                            </h4>
                                            <p id="firstcreated" data-firstcreated="{{Auth::user()->created_at}}">
                                                <i class="fa fa-clock"></i>
                                                <i id="firstTimeLoginDate"></i>
                                            </p>
                                        </div>
                                    </a>
                                </li>                        
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#modal-notif-list">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                <!-- Tasks -->
                {{-- <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">flag</i>
                        <span class="label-count">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">TASKS</li>
                        <li class="body">
                            <ul class="menu tasks">
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Footer display issue
                                            <small>32%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Make new buttons
                                            <small>45%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Create new dashboard
                                            <small>54%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Solve transition issue
                                            <small>65%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Answer GitHub questions
                                            <small>92%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Tasks</a>
                        </li>
                    </ul>
                </li> --}}
                <!-- #END# Tasks -->
                <li class="pull-right">
                    <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                        <i class="material-icons">palette</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image cursor-pointer" data-toggle="modal" data-target="#edit-prof-picture">
                <img src="{{Storage::url('~user_profile/'.Auth::user()->picture)}}" width="48" height="48" alt="user profile image" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <strong>
                        {{Auth::user()->first_name ? Auth::user()->getNameAttribute() : Auth::user()->username}}
                    </strong>
                </div>
                <div class="email">{{Auth::user()->email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:void(0);" {{is_null(Auth::user()->first_name) ? 'id=profile-restrict-btn style=pointer-events:none;' : 'data-toggle=modal data-target=#update-profile-info'}}>
                                <i class="fa fa-user-edit"></i> Edit Profile
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>{{__('Logout')}}</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                {{csrf_field()}}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active" role="presentation">
                    <a href="#homeTab" data-toggle="tab">      
                        <i class="material-icons">home</i>                   
                        <span class="w-100">                            
                            Home
                        </span>
                    </a>
                </li>
                @if(Auth::user()->type === 'admin')
                    <li class="" role="presentation">
                        <a href="#homeTab" data-toggle="tab">        
                            <i class="material-icons">security</i>                
                            <span class="w-100">                                
                                Police Station
                            </span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">                
                &copy; 2016 - {{date('Y')}} <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    @include('pages.home-settings')
    <!-- #END# Right Sidebar -->
</section>
@endsection