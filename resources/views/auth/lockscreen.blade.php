<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Lock Admin</title>

        <!-- Styles -->
        <link href="{{ url('https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap') }}" rel="stylesheet">
        <link href="{{ asset('coba/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('coba/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('coba/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">

        <!-- Theme Styles -->
        <link href="{{ asset('coba/css/main.min.css') }}" rel="stylesheet">
        <link href="{{ asset('coba/css/custom.css') }}" rel="stylesheet">
    </head>
    <body class="login-page">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>
          </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <img src="{{ asset('coba/images/avatars/profile-image.png') }}" width="60" alt="">
                            </div>
                            <div class="authent-text">
                                <p>Welcome back!</p>
                                <p>Enter your password to unlock.</p>
                            </div>
                            <form method="POST" action="{{ route('unlock') }}">
                                @csrf
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required autofocus>
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-info m-b-xs">Unlock</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
        <!-- Javascripts -->
        <script src="{{ url('https://unpkg.com/@popperjs/core@2') }}"></script>
        <script src="{{ url('https://unpkg.com/feather-icons') }}"></script>

        <script src="{{ asset('coba/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('coba/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('coba/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
        
        <script src="{{ asset('coba/js/main.min.js') }}"></script>
    </body>
</html>