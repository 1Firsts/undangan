@extends('feature/layout/main')
@section('title', 'Create Theme')

@section('content')
                <div class="row">
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Buat Tema 18</h5>
                              <p class="card-description">Form Pembuatan Tema Kategori 18</p>
                              
                              <form action="{{ route('buat_tema', 18) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror" name="nama_pelanggan" id="nama_pelanggan" placeholder="Jane Doe" value="{{ old('nama_pelanggan') }}">
                                    </div>
                                    @error('nama_pelanggan')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>
                                
                                <label class="col-sm-2 col-form-label text-info">Pria</label>
                                
                                <!-- Nama Lengkap Pria -->
                                <div class="row mb-3">
                                    <label for="nama_lengkap_pria" class="col-sm-2 col-form-label">Nama Lengkap Pria</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control @error('nama_lengkap_pria') is-invalid @enderror" name="nama_lengkap_pria" id="nama_lengkap_pria" placeholder="Jane Doe" value="{{ old('nama_lengkap_pria') }}">
                                    </div>
                                    @error('nama_lengkap_pria')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="nama_panggilan_pria" class="col-sm-2 col-form-label">Nama Panggilan Pria</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control @error('nama_panggilan_pria') is-invalid @enderror" id="nama_panggilan_pria" name="nama_panggilan_pria" placeholder="Doe" value="{{ old('nama_panggilan_pria') }}">
                                    </div>
                                    @error('nama_panggilan_pria')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>
                                  <!-- End Nama Lengkap -->
                                  
                                  <label class="col-sm-2 col-form-label text-info">Wanita</label>
                                  
                                  <!-- Nama Lengkap Wanita -->
                                  <div class="row mb-3">
                                    <label for="nama_lengkap_wanita" class="col-sm-2 col-form-label">Nama Lengkap Wanita</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control @error('nama_lengkap_wanita') is-invalid @enderror" name="nama_lengkap_wanita" id="nama_lengkap" placeholder="Jany allica" value="{{ old('nama_lengkap_wanita') }}">
                                    </div>
                                    @error('nama_lengkap_wanita')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="nama_panggilan_wanita" class="col-sm-2 col-form-label">Nama Panggilan Wanita</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control @error('nama_panggilan_wanita') is-invalid @enderror" id="nama_panggilan_wanita" name="nama_panggilan_wanita" placeholder="Allica" value="{{ old('nama_panggilan_wanita') }}">
                                    </div>
                                    @error('nama_panggilan_wanita')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>
                                  <!-- End Nama Wanita -->

                                  <!-- Start Foto Pasangan -->
                                  <label class="col-sm-2 col-form-label text-info">Foto Pasangan</label>

                                  <div class="row mb-3">
                                    <label for="foto_pasangan1" class="col-sm-2 col-form-label">Foto Pasangan Pria</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_pasangan1') is-invalid @enderror" type="file" name="foto_pasangan1" id="foto_pasangan1" value="{{ old('foto_pasangan1') }}">
                                    </div>
                                    @error('foto_pasangan1')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="foto_pasangan2" class="col-sm-2 col-form-label">Foto Pasangan Wanita</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_pasangan2') is-invalid @enderror" type="file" name="foto_pasangan2" id="foto_pasangan2" value="{{ old('foto_pasangan2') }}">
                                    </div>
                                    @error('foto_pasangan2')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>
                                  <!-- End Foto Pasangan -->

                                  <!-- Gallery Start -->
                                  <label for="nama_panggilan" class="col-sm-2 col-form-label text-info">Foto Gallery</label>

                                  <div class="row mb-3">
                                    <label for="foto_galeri1" class="col-sm-2 col-form-label">Foto Galeri 1</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_galeri1') is-invalid @enderror" type="file" name="foto_galeri1" id="foto_galeri1" value="{{ old('foto_galeri1') }}">
                                    </div>
                                    @error('foto_galeri1')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="foto_galeri2" class="col-sm-2 col-form-label">Foto Galeri 2</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_galeri2') is-invalid @enderror" type="file" name="foto_galeri2" id="foto_galeri2" value="{{ old('foto_galeri2') }}">
                                    </div>
                                    @error('foto_galeri2')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="foto_galeri3" class="col-sm-2 col-form-label">Foto Galeri 3</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_galeri3') is-invalid @enderror" type="file" name="foto_galeri3" id="foto_galeri3" value="{{ old('foto_galeri3') }}">
                                    </div>
                                    @error('foto_galeri3')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="foto_galeri4" class="col-sm-2 col-form-label">Foto Galeri 4</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_galeri4') is-invalid @enderror" type="file" name="foto_galeri4" id="foto_galeri4" value="{{ old('foto_galeri4') }}">
                                    </div>
                                    @error('foto_galeri4')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="foto_galeri5" class="col-sm-2 col-form-label">Foto Galeri 5</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_galeri5') is-invalid @enderror" type="file" name="foto_galeri5" id="foto_galeri5" value="{{ old('foto_galeri5') }}">
                                    </div>
                                    @error('foto_galeri5')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="foto_galeri6" class="col-sm-2 col-form-label">Foto Galeri 6</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_galeri6') is-invalid @enderror" type="file" name="foto_galeri6" id="foto_galeri6" value="{{ old('foto_galeri6') }}">
                                    </div>
                                    @error('foto_galeri6')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="foto_galeri7" class="col-sm-2 col-form-label">Foto Galeri 7</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_galeri7') is-invalid @enderror" type="file" name="foto_galeri7" id="foto_galeri7" value="{{ old('foto_galeri7') }}">
                                    </div>
                                    @error('foto_galeri7')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="foto_galeri8" class="col-sm-2 col-form-label">Foto Galeri 8</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_galeri8') is-invalid @enderror" type="file" name="foto_galeri8" id="foto_galeri8" value="{{ old('foto_galeri8') }}">
                                    </div>
                                    @error('foto_galeri8')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <!-- Gallery End -->

                                  <div class="row mb-3">
                                    <label for="media_sosial" class="col-sm-2 col-form-label">Media Sosial</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('media_sosial') is-invalid @enderror" type="url" id="media_sosial" name="media_sosial" placeholder="https://test.com" value="{{ old('media_sosial') }}">
                                    </div>
                                    @error('media_sosial')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="hari_tgl" class="col-sm-2 col-form-label">Hari Tanggal</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('hari_tgl') is-invalid @enderror" type="date" id="hari_tgl" name="hari_tgl" value="{{ old('hari_tgl') }}">
                                    </div>
                                    @error('hari_tgl')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('waktu') is-invalid @enderror" type="time" id="waktu" name="waktu" value="{{ old('waktu') }}">
                                    </div>
                                    @error('waktu')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi') }}"></textarea>
                                    </div>
                                    @error('lokasi')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="tema_pernikahan" class="col-sm-2 col-form-label">Tema Pernikahan</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('tema_pernikahan') is-invalid @enderror" type="text" id="tema_pernikahan" name="tema_pernikahan" value="{{ old('tema_pernikahan') }}">
                                    </div>
                                    @error('tema_pernikahan')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>
                                  
                                  <input type="hidden" name="link_undangan" id="link_undangan" value="test.com">
                                  <input type="hidden" name="tema_category" id="tema_category" value="Tema 18">

                                  <button type="submit" class="btn btn-success">Buat</button>
                                </form>
                          </div>
                      </div>
                  </div>
                        
                     </div>
                    </div>
                  </div>
                </div>      
@endsection