@extends('feature/layout/main')
@section('title', 'Home')
@section('content')

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Pelanggan Baru</h5>
                    <h2>{{ $newCustomerCount }}</h2>
                    <p>Transaksi Masuk</p>
                    <div class="progress">
                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: {{ $progressNewCustomer }}%" aria-valuenow="{{ $progressNewCustomer }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Pesanan</h5>
                    <h2>{{ $selesaiOrdersCount }}</h2>
                    <p>Pesanan Selesai</p>
                    <div class="progress">
                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: {{ $progressSelesaiOrders }}%" aria-valuenow="{{ $progressSelesaiOrders }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Produksi</h5>
                    <h2>{{ $jumlahOrdersCount }}</h2>
                    <p>Jumlah Link</p>
                    <div class="progress">
                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: {{ $progressJumlahOrders }}%" aria-valuenow="{{ $progressJumlahOrders }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Pengerjaan</h5>
                    <h2>{{ $dikerjakanOrdersCount }}</h2>
                    <p>Pesanan Dikerjakan</p>
                    <div class="progress">
                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: {{ $progressDikerjakanOrders }}%" aria-valuenow="{{ $progressDikerjakanOrders }}" aria-valuemin="0" aria-valuemax="100">
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
                      <canvas id="myLineChart" width="auto" height="auto"></canvas>
                  </div>
                </div>
              </div>
              
              <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js') }}"></script>

              <script>
                    // Sample data (replace with your actual data)
                    var labels = ['Selesai', 'Dikerjakan'];
                    var selesaiData = [{{ $selesaiCount }}, 0]; // Use 0 for the second data point
                    var dikerjakanData = [{{ $dikerjakanCount }}, 0]; // Use 0 for the second data point

                    // Prepare the dataset for the Line Chart
                    var ctx = document.getElementById('myLineChart').getContext('2d');

                    var data = {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Selesai',
                                data: selesaiData,
                                borderColor: 'rgba(211, 251, 249, 1)', // Customize the line color
                                backgroundColor: '#d3fbf9', // red
                                borderWidth: 4,
                                fill: false, // Do not fill the area under the line
                            },
                            {
                                label: 'Dikerjakan',
                                data: dikerjakanData,
                                borderColor: 'rgba(120, 136, 252, 1)', // Customize the line color
                                backgroundColor: '#7888fc', // red
                                borderWidth: 4,
                                fill: false, // Do not fill the area under the line
                            },
                        ],
                    };

                    // Create the Line Chart
                    var lineChart = new Chart(ctx, {
                        type: 'line', // Set the chart type to 'line'
                        data: data,
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'Laporan Data',
                                },
                            },
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Status',
                                    },
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Data',
                                    },
                                },
                            },
                        },
                    });
                </script>

                <div class="col-sm-6 col-xl-4">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Data Pelanggan</h5>

                            @if(count($orders) > 0)
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
                            @else
                                <p>Tidak ada data pelanggan.</p>
                            @endif

                        </div>
                    </div>
                </div>

            </div>         

@endsection