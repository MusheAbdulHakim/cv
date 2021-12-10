<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">

                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                
                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-danger badge-pill">{{auth()->user()->unReadNotifications->count()}}</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> Notifications </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small"> View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            @foreach (auth()->user()->unReadNotifications as $notification)
                            <a href="" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="bx bx-bell"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">{{$notification->data['subject']}}</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">{{$notification->data['message']}}</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 
                                                {{$notification->created_at->diffForHumans()}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            
                        </div>
                        <div class="p-2 border-top">
                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center"
                                href="{{route('mark-as-read')}}">
                                <i class="mdi mdi-eye mr-1"></i> Mark All as Read
                            </a>
                        </div>
                    </div>
                </div>

                <!-- user profile -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect"
                        id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="rounded-circle header-profile-user"
                            src="{{!empty(auth()->user()->avatar) ? asset('storage/users/'.auth()->user()->avatar): asset('assets/images/users/avatar-2.jpg')}}" alt="Avatar">
                        <span class="d-none d-xl-inline-block ml-1">{{auth()->user()->username}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="{{route('profile')}}"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                        @can('view-settings')
                        <a class="dropdown-item d-block" href="{{route('settings')}}"><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                        @endcan
                        <div class="dropdown-item text-danger">
                            <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="btn" type="submit"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                @can('view-settings')
                <div class="dropdown d-inline-block">
                    <a href="{{route('settings')}}">
                        <button type="button" class="btn header-item noti-icon  waves-effect">
                            <i class="mdi mdi-settings-outline"></i>
                        </button>
                    </a>
                </div>
                @endcan
            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{!empty(AppSettings::get('logo')) ? asset('storage/'.AppSettings::get('logo')): asset('assets/images/logo-sm.png')}}" alt="" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="{{!empty(AppSettings::get('logo')) ? asset('storage/'.AppSettings::get('logo')): asset('assets/images/logo-dark.png')}}" alt="" height="17">
                        </span>
                    </a>

                    <a href="" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{!empty(AppSettings::get('logo')) ? asset('storage/'.AppSettings::get('logo')): asset('assets/images/logo-sm.png')}}" alt="" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="{{!empty(AppSettings::get('logo')) ? asset('storage/'.AppSettings::get('logo')): asset('assets/images/logo-light.png')}}" alt="" height="19">
                        </span>
                    </a>
                </div>

                <button type="button"
                    class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- App Search-->
                <form class="app-search d-none d-lg-inline-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form>

               
            </div>

        </div>
    </div>
</header>