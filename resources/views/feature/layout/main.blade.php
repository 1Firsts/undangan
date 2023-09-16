@extends('feature/layout/header')            

<div class="page-container">
    <div class="page-header">
          
        <nav class="navbar navbar-expand-lg d-flex justify-content-between">
          <div class="" id="navbarNav">
            <ul class="navbar-nav" id="leftNav">
              <li class="nav-item">
                <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('vcoba') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}">Pages</a>
                </li>
              </ul>
            </div>
            
            <div class="" id="headerNav">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('coba/images/avatars/profile-image.png') }}" alt=""></a>
                  
                  <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                    <a class="dropdown-item" href="{{ url('#') }}"><i data-feather="settings"></i>Settings</a>
                    <a class="dropdown-item" href="{{ url('#') }}"><i data-feather="unlock"></i>Lock</a>
                    <a class="dropdown-item" href="{{ url('#') }}"><i data-feather="log-out"></i>Logout</a>
                  </div>
                </li>
              </ul>
            </div>

          </nav>
        </div>
        
        <div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        
        <li class="sidebar-title">
            Main
        </li>
        <li class="active-page">
            <a href="{{ url('vcoba') }}"><i data-feather="home"></i>Dashboard</a>
        </li>

        <li class="sidebar-title">
            Apps
        </li>
        <li>
            <a href="{{ url('feature/order') }}"><i data-feather="inbox"></i>Data Order</a>
        </li>
        <li>
            <a href="{{ url('feature/table') }}"><i data-feather="calendar"></i>Summary Table</a>
        </li>
        <li>
            <a href="{{ url('feature/theme') }}"><i data-feather="user"></i>List Theme</a>
        </li>

        <li class="sidebar-title">
            Proses
        </li>
        <li>
            <a href="{{ url('#') }}"><i data-feather="edit"></i>Create<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul class="">
                <li><a href="{{ url('feature/create') }}"><i class="far fa-circle"></i>Theme 1</a></li>
                <li><a href="{{ url('feature/create2') }}"><i class="far fa-circle"></i>Theme 2</a></li>
                <li><a href="{{ url('feature/create3') }}"><i class="far fa-circle"></i>Theme 3</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ url('#') }}"><i data-feather="list"></i>See Order<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul class="">
                <li><a href="{{ url('feature/seeorder') }}"><i class="far fa-circle"></i>Theme 1</a></li>
                <li><a href="{{ url('feature/seeorder2') }}"><i class="far fa-circle"></i>Theme 2</a></li>
                <li><a href="{{ url('feature/seeorder3') }}"><i class="far fa-circle"></i>Theme 3</a></li>
            </ul>
        </li>

    </ul>
</div>
        
        <div class="page-content">
          <div class="main-wrapper">
            @yield('content')
          </div>
        </div>

  </div>
</div>
@extends('feature/layout/footer')