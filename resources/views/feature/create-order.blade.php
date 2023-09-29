@extends('feature/layout/main')
@section('title', 'Home')

@section('content')
                <div class="row">
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Buat Data Pesanan</h5>
                              <p class="card-description">Membuat Data Kerja Tema.</p>

                              @if ($errors->any())
                              <div class="alert alert-danger">
                                <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                                </ul>
                              </div>
                            @endif

                              <form action="{{ route('store_order') }}" enctype="multipart/form-data" method="POST">
                                @csrf   
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pelanggan</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="customer" id="customer" placeholder="Jane Doe">
                                      @error('customer')
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

                                  <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                      <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="10">
                                      @error('jumlah')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                      <select class="form-select" name="status" aria-label="Default select example">
                                        <option selected>Status Kerjaan</option>
                                        <option value="Dikerjakan">Dikerjakan</option>
                                        <option value="Selesai">Selesai</option>
                                        <option value="Batal">Batal</option>
                                      </select>
                                      @error('status')
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