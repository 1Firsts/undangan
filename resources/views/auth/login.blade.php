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
        <title>Login</title>

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
                                <img src="{{ asset('coba/images/logo@2x.png') }}" alt="">
                            </div>
                            <div class="authent-text">
                                <p>Selamat datang! </p>
                                <p>Silahkan Login dengan akun yang ada.</p>
                            </div>
                            
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" :value="old('email')" name="email" required autofocus autocomplete="username">
                                        <label for="floatingInput">Email address</label>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password">
                                        <label for="floatingPassword">Password</label>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                      </div>
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                  <label class="form-check-label" for="exampleCheck1">{{ __('Remember me') }}</label>
                                </div>
                                <div class="d-grid">
                                <button type="submit" class="btn btn-info m-b-xs">{{ __('Log in') }}</button>
                            </div>
                              </form>
                              <!-- <div class="authent-reg">
                                <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                              </div> -->
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