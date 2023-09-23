@extends('feature/layout/main')
@section('title', 'Profile')

@section('content')
                <div class="row">
                  
                    <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Create Theme Undangan</h5>
                              <p class="card-description">Page ini akan muncul di halaman depan.</p>

                              @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                              <form action="{{ route('store_theme') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                                        @error('judul')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                                        @error('deskripsi')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="quote" class="col-sm-2 col-form-label">Quoteby</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="quote" name="quote" placeholder="Quoteby">
                                        @error('quote')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="file" name="file" accept="image/*">
                                        @error('foto')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                          </div>
                      </div>
                  </div>

                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Create Theme Undangan</h5>
                              <p class="card-description">Page ini akan muncul di halaman depan.</p>

                              @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link" style="background: none; border: none; cursor: pointer;">Logout</button>
                            </form>
                          </div>
                      </div>
                  </div>

                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Create Theme Undangan</h5>
                              <p class="card-description">Page ini akan muncul di halaman depan.</p>

                              @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link" style="background: none; border: none; cursor: pointer;">Logout</button>
                            </form>
                          </div>
                      </div>
                  </div>
                        
                     </div>
                    </div>
                  </div>
                </div>      
@endsection