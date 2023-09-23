@extends('feature/layout/main')
@section('title', 'Data Utama')
@section('content')
                        <div class="row">
                        
                        @php
                        use App\Models\Coba;
                        $cobas = Coba::all();
                        @endphp

                        @if ($cobas !== null && count($cobas) === 0)
                        <div class="col-md-12 col-lg-4">
                          <div class="card">
                            <div class="card-body">
                              <p class="card-text">Belum ada tema yang dipajang, silahkan masukan tema di <b>Halaman Buat Data<b></p>
                            </div>
                          </div>
                        </div>
                        @endif

                    
                        @foreach ($cobas as $coba)
                        <div class="col-md-12 col-lg-4">
                          <div class="card">
                            
                            <img src="{{ asset('/' . $coba->file) }}" class="card-img-top" alt="Uploaded photo">
                            
                            <div class="card-body">
                              <div class="card-meet-header">
                                <div class="card-meet-text">
                                  <h6>{{ $coba->quote }}</h6>
                                  <p>{{ $coba->judul }}</p>
                                </div>
                              </div>
                              <p class="card-text m-b-md">{{ $coba->deskripsi }}</p>
                              <form action="{{ route('coba.delete', $coba->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      @endforeach

                        
                     </div>
                    </div>
                  </div>
                </div>
        
@endsection