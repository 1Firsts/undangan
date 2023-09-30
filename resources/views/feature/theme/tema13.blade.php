@extends('feature/layout/main')
@section('title', 'Create Theme')

@section('content')
                <div class="row">
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Buat Tema 13</h5>
                              <p class="card-description">Form Pembuatan Tema Kategori 13</p>
                              
                              <form action="{{ route('buat_tema', 13) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" placeholder="Jane Doe" value="{{ old('nama_lengkap') }}">
                                    </div>
                                    @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <div class="row mb-3">
                                    <label for="nama_panggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control @error('nama_panggilan') is-invalid @enderror" id="nama_panggilan" name="nama_panggilan" placeholder="Doe" value="{{ old('nama_panggilan') }}">
                                    </div>
                                    @error('nama_panggilan')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

                                  <label class="col-sm-2 col-form-label text-info">Foto Pasangan</label>

                                  <div class="row mb-3">
                                    <label for="foto_pasangan1" class="col-sm-2 col-form-label">Foto Pasangan</label>
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
                                    <label for="foto_pasangan2" class="col-sm-2 col-form-label">Foto Pasangan</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto_pasangan2') is-invalid @enderror" type="file" name="foto_pasangan2" id="foto_pasangan2" value="{{ old('foto_pasangan2') }}">
                                    </div>
                                    @error('foto_pasangan2')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

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
                                  <input type="hidden" name="tema_category" id="tema_category" value="Tema 13">

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