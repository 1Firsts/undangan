@extends('feature/layout/header')            

    <div class="page-container">

    <div class="page-header">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                        <li class="nav-item">
                            <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('feature/profile/main-profile') }}">{{ Auth::user()->name }}</a>
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
          <li class="{{ Request::is('vcoba') ? 'active-page' : '' }}">
              <a href="{{ url('vcoba') }}"><i data-feather="home"></i>Dashboard</a>
          </li>

          <li class="{{ Request::is('main_theme') ? 'active-page' : '' }}">
              <a href="{{ url('feature/main-theme') }}"><i data-feather="user"></i>Data Utama</a>
          </li>
          <li class="{{ Request::is('feature/main-create') ? 'active-page' : '' }}">
              <a href="{{ url('feature/main-create') }}"><i data-feather="edit"></i>Buat Data</a>
          </li>

          <li class="sidebar-title">
              Apps
          </li>
          <li class="{{ Request::is('orders') ? 'active-page' : '' }}">
              <a href="{{ url('orders') }}"><i data-feather="inbox"></i>Data Pesanan</a>
          </li>
          <li class="{{ Request::is('feature/table') ? 'active-page' : '' }}">
              <a href="{{ url('feature/table') }}"><i data-feather="calendar"></i>Rangkuman</a>
          </li>
          <li class="{{ Request::is('feature/theme') ? 'active-page' : '' }}">
              <a href="{{ url('feature/theme') }}"><i data-feather="user"></i>Daftar Tema</a>
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