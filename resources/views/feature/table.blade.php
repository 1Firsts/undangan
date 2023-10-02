@extends('feature/layout/main')
@section('title', 'Table')
@section('content')

                <div class="row">
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Rangkuman Transaksi</h5>
                              <p>Table ini merangkum semua transaksi tema menjadi 1 agar mudah dibaca</p>
                              <table id="complex-header" class="display" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th rowspan="2">Nama Pelanggan</th>
                                          <th colspan="2" style="text-align:center">Data Informasi</th>
                                      </tr>
                                      <tr>
                                          <th>Kategori</th>
                                          <th>Dibuat</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                  @php
                                    use App\Models\Tema;
                                    $tables = Tema::all();
                                  @endphp
                                  @foreach ($tables as $table)
                                      <tr>
                                          <td>{{ $table->nama_pelanggan }}</td>
                                          <td>{{ $table->tema_category }}</td>
                                          <td>{{ $table->created_at }}</td>
                                      </tr>
                                  @endforeach
                                      
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
@endsection