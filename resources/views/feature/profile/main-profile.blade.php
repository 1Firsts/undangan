@extends('feature/layout/main')
@section('title', 'Profile')
@section('content')
                
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Keluar</h5>
                                    <p class="card-description">Keluar jika sudah tidak dipakai</p>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    <form action="{{ route('logout') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                   
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                    </form>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Kunci Akun</h5>
                                    <p class="card-description">Keluar sementara</p>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    <form action="{{ route('unlock') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                   
                                    <button type="submit" class="btn btn-primary">Lock</button>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Registrasi Akun</h5>
                                    <p class="card-description">Pembuatan akun baru.</p>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    <form action="{{ route('main-profile.store') }}" method="POST">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password" placeholder="Password">
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                                @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Register</button>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Hapus Akun</h5>
                                    <p class="card-description">Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Sebelum menghapus akun Anda, harap unduh data atau informasi apa pun yang ingin Anda simpan.</p>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    <form action="{{ route('main-profile.destroy') }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <div class="row mb-3">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password" name="password" value="{{ __('Password') }}" placeholder="{{ __('Password') }}">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ganti Password</h5>
                                    <p class="card-description">Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.</p>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    <form action="{{ route('main-profile.update') }}" method="POST">
                                    @csrf
                                    @method('patch')

                                    <div class="row mb-3">
                                        <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="current_password" name="current_password" autocomplete="current-password">
                                            @error('current_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="new-password" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="new-password" name="new-password" autocomplete="new-password">
                                            @error('new-password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
                                            @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>      

@endsection