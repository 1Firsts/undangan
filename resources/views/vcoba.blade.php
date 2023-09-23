@extends('feature/layout/main')
@section('title', 'Home')

@section('content')
    <div class="row">
            <div class="col-md-6 col-xl-3">
              <div class="card stat-widget">
              <div class="card-body">

              @php
                use App\Helpers\CountNewCustomersHelper;
                $newCustomerCount = CountNewCustomersHelper::countNewCustomersInLastMonth();
              @endphp
                
                <h5 class="card-title">Pelanggan Baru</h5>
                <h2>{{ $newCustomerCount }}</h2>
                <p>Transaksi Masuk</p>
                <div class="progress">
                  <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>

                </div>
              </div>
            </div>

            @php
              use App\Helpers\CountSelesaiCustomersHelper;
              $selesaiOrdersCount = CountSelesaiCustomersHelper::countSelesaiCustomers();
            @endphp
            <div class="col-md-6 col-xl-3">
              <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Pesanan</h5>
                    <h2>{{ $selesaiOrdersCount }}</h2>
                    <p>Pesanan Selesai</p>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
              </div>
            </div>

            @php
              use App\Helpers\CountJumlahCustomersHelper;
              $jumlahOrdersCount = CountJumlahCustomersHelper::countJumlahCustomers();
            @endphp
            <div class="col-md-6 col-xl-3">
                <div class="card stat-widget">
                  <div class="card-body">
                      <h5 class="card-title">Produksi</h5>
                      <h2>{{ $jumlahOrdersCount }}</h2>
                      <p>Jumlah Link</p>
                      <div class="progress">
                          <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                    </div>
                </div>
            </div>

            @php
              use App\Helpers\CountDikerjakanCustomersHelper;
              $dikerjakanOrdersCount = CountDikerjakanCustomersHelper::countDikerjakanCustomers();
            @endphp
            <div class="col-md-6 col-xl-3">
              <div class="card stat-widget">
                  <div class="card-body">
                      <h5 class="card-title">Pengerjaan</h5>
                      <h2>{{ $dikerjakanOrdersCount }}</h2>
                      <p>Pesanan Dikerjakan</p>
                      <div class="progress">
                          <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                   </div>
                </div>
            </div>
      </div>

          
      <div class="row">
              <div class="col-sm-6 col-xl-8">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Laporan</h5>
                      <div id="apex1"></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-4">
                 <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Data Pelanggan</h5>
                        
                        @foreach ($orders as $order)
                        <div class="transactions-list">
                            <div class="tr-item">
                                <div class="tr-company-name">
                                    <div class="tr-icon tr-card-icon
                                        @if ($order->status === 'Selesai')
                                            tr-card-bg-success text-success
                                        @elseif ($order->status === 'Batal')
                                            tr-card-bg-danger text-danger
                                        @elseif ($order->status === 'Dikerjakan')
                                            tr-card-bg-primary text-primary
                                        @endif">
                                        <i data-feather="user"></i>
                                    </div>
                                    <div class="tr-text">
                                        <a href="#"><h4>{{ $order->customer }}</h4></a>
                                        <p>{{ $order->status }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                      </div>
                    </div>
                  </div>
            </div>           
@endsection