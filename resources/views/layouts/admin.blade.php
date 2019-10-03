<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Martel|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
    <script src="{{url('js/app.js')}}"></script>
    <script src="{{url('js/admin.js')}}"></script>
    @yield('adds')
    <title>@yield('title')</title>
</head>
<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
            <div class="sidebar-brand">
                <a>Admin Page</a>
                <div id="close-sidebar">
                <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="sidebar-header">
                <div class="user-pic">
                <img class="img-responsive img-rounded" src="{{url('images/admin.PNG')}}"
                    alt="User picture">
                </div>
                <div class="user-info">
                <span class="user-name">Mr
                    <strong id="user">{{ Auth::user()->name }}</strong>
                </span>
                <span class="user-role" id="ip"></span>
                <span class="user-status">
                    <i class="fa fa-circle"></i>
                    <span>Online</span>
                </span>
                </div>
            </div>
            <!-- sidebar-header  -->

            <div class="sidebar-menu">
                <ul>
                <li class="header-menu">
                    <span>Menu </span>
                </li>
                <li>
                    <a href="{{url('admin')}}">
                    <i class="fa fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-dropdown">
                    <a href="#">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Jadwal</span>
                    </a>
                    <div class="sidebar-submenu">
                    <ul>
                        <li>
                        <a href="{{url('admin/aktif')}}">Aktif</a>
                        </li>
                        <li>
                        <a href="{{url('admin/exp')}}">Terlewatkan</a>
                        </li>
                    </ul>
                    </div>
                </li>

                <li>
                    <a href="{{url('admin/add')}}">
                    <i class="fas fa-calendar-plus"></i>
                    <span>Add Jadwal</span>
                    </a>
                </li>

                </ul>
            </div>
            </div>
            <!-- sidebar-content  -->

            <div class="sidebar-footer">
            <a href="https://github.com/sogatanco/pengajian">
                <i class="fas fa-question-circle"></i>
                <span class="badge-sonar"></span>
            </a>
            <a href="mailto:wahyu@sogata.co">
                <i class="fas fa-envelope"></i>
            </a>
            <a href="https://www.instagram.com/sogata.co/">
                <i class="fas fa-heart"></i>
            </a>
            <a href="{{ route('logout') }} " onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off" ></i>
            </a>
            </div>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <main class="page-content">
        
        @if(session('status'))
        <div class="toast" style="position: absolute; top: 20px; right: 10px;" data-autohide="false" >
            <div class="toast-header">
                <img src="{{url('images/logo.png')}}" class="img-fluid" alt="SIG-Logo" width="30px;">
                <strong class="mr-auto">&ensp;GEO-LOC</strong>
                <small>Just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body text-danger">
                {{session('status')}}
            </div>
        </div>
        @endif

            <div class="container">
        @yield('content')
            </div>
        </main>


    </div>
</body>
</html>