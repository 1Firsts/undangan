@section('header')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>@yield('title') Admin</title>
    
    <!-- Styles -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap') }}" rel="stylesheet">
    
    <link href="{{ asset('coba/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coba/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coba/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    
    <!-- <link href="{{ asset('coba/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('coba/plugins/DataTables/datatables.min.css') }}" rel="stylesheet">   
    
    <!-- Theme Styles -->
    <link href="{{ asset('coba/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coba/css/custom.css') }}" rel="stylesheet">

  </head>
<body>   
@show