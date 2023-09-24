@extends('feature/layout/main')
@section('title', 'Create Theme')

@section('content')
                <div class="row">
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Buat Tema 16</h5>
                              <p class="card-description">Form Pembuatan Tema Kategori 16</p>
                              
                              <form action="{{ route('buat_tema', 16) }}" enctype="multipart/form-data" method="POST">
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

                                  <div class="row mb-3">
                                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                      <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto" id="foto" value="{{ old('foto') }}">
                                    </div>
                                    @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                  </div>

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
                                  <input type="hidden" name="tema_category" id="tema_category" value="Tema 1">

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