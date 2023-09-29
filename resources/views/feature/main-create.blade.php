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
                                        <label for="category" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="category" id="categorySelect" aria-label="Pilih Tema">
                                                <option value="" selected>Pilih Tema</option> <!-- Initial placeholder option -->
                                                @for ($i = 1; $i <= 45; $i++)
                                                    <option value="Tema {{ $i }}">Tema {{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('category')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    @for ($i = 1; $i <= 45; $i++)
                                        <input type="hidden" name="file" class="form-control theme-photo" id="photo{{ $i }}" value="{{ asset('coba/images/gambar' . $i . '.png') }}">
                                    @endfor

                                    <div class="row mb-3">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <img id="selectedImage" src="" class="card-img-top" alt="Gambar belum dipilih">
                                            <p id="imageInfoMessage" class="text-danger"></p> <!-- Initial information message -->
                                        </div>
                                    </div>

                                    <script>
                                        // Get references to the category select element and image elements
                                        const categorySelect = document.getElementById('categorySelect');
                                        const selectedImage = document.getElementById('selectedImage');
                                        const imageInfoMessage = document.getElementById('imageInfoMessage');

                                        // Add an event listener to the category select element
                                        categorySelect.addEventListener('change', () => {
                                            // Get the selected category value
                                            const selectedCategory = categorySelect.value;

                                            // Get the corresponding photo URL based on the selected category
                                            const photoInput = document.getElementById(`photo${selectedCategory}`);
                                            const photoURL = photoInput ? photoInput.value : "";

                                            if (!photoURL) {
                                                // Display the "Gambar belum dipilih" message
                                                selectedImage.src = ""; // Clear the image
                                                imageInfoMessage.textContent = "Gambar belum dipilih";
                                            } else {
                                                // Set the src attribute of the image element to the selected photo URL
                                                selectedImage.src = photoURL;
                                                imageInfoMessage.textContent = ""; // Clear the message
                                            }
                                        });
                                    </script>


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

                    </div>
                  </div>
                </div>      
@endsection