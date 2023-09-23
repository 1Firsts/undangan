@extends('feature/layout/main')
@section('title', 'Home')

@section('content')
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Buat Tema Undangan</h5>
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
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Ubah Nomor Whatsapp</h5>
                            <p class="card-description">Page ini akan muncul di halaman depan.</p>

                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            
                            @php
                                use App\Models\Link;
                                use App\Http\Controllers\CobaController;
                                $dataLink = Link::all();
                            @endphp

                            @foreach ($dataLink as $dataLinks)
                                <form action="{{ route('updateLink', $dataLinks->id) }}" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="row mb-3">
                                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="link" name="link" value="{{ $dataLinks->link }}" placeholder="New Link">
                                            @error('link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $dataLinks->title }}" placeholder="New Title">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Ubah Lagu</h5>
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

                            <form action="" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('put')
                                <div class="row mb-3">
                                    <label for="nomor" class="col-sm-2 col-form-label">Lagu</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="lagu" name="lagu" placeholder="test.com">
                                        @error('nomor')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>
                  </div>
                </div>      
@endsection