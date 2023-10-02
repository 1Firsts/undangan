@extends('feature/layout/main')
@section('title', 'Order')

@section('content')

                <div class="row">
                  <div class="col-md-12 col-lg-8">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Data Transaksi</h5>
                              <p>Informasi Transaksi Pembeli</p>
                              
                              <div class="table-responsive">
                                  <table id="complex-header" class="display" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th rowspan="2">Pelanggan</th>
                                              <th colspan="6" style="text-align:center">Data Informasi</th>
                                          </tr>
                                          <tr>
                                              <th>Kategori</th>
                                              <th>Jumlah</th>
                                              <th>Status</th>
                                              <th>Aksi</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($orders as $order)
                                              <tr>
                                                  <td>{{ $order->customer }}</td>
                                                  <td>{{ $order->category }}</td>
                                                  <td>{{ $order->jumlah }}</td>
                                                  <td>
                                                      @php
                                                          $statusClasses = [
                                                              'Selesai' => 'success',
                                                              'Dikerjakan' => 'info',
                                                              'Batal' => 'danger',
                                                          ];
                                                          $statusBadgeClass = $statusClasses[$order->status] ?? 'secondary';
                                                      @endphp
                                                      <span class="badge bg-{{ $statusBadgeClass }}">{{ $order->status }}</span>
                                                  </td>
                                                  <td>
                                                      <form action="{{ route('order.delete', $order->id) }}" method="POST">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this undangan theme?')">
                                                              <i class="fas fa-trash"></i>
                                                          </button>
                                                      </form>
                                                  </td>
                                              </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>

                          </div>
                      </div>
                  </div>
                  
                <div class="col-md-12 col-lg-4">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Buat Data</h5>
                                <span>Silahkan Klik
                                    <a href="{{ url('feature/create-order') }}">
                                    <i data-feather="edit"></i>
                                    <i class="fas fa-chevron"> Buat Data</i>
                                    </a>Baru untuk membuat data pelanggan baru agar mudah dalam hitungan Transaksi Pembeli
                                </span>
                            </div>
                        </div>

                        <div class="card stat-widget">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Data</h5>
                                <p>Informasi Laporan Grafik</p>
                                <canvas id="myPieChart" width="auto" height="auto"></canvas>
                            </div>
                        </div>

                        </div>

                        <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js') }}"></script>

                        <script>
                            // Sample data (replace with your actual data)
                            var labels = ['Selesai', 'Dikerjakan'];
                            var selesaiCount = {{ $selesaiCount ?? 0 }};
                            var dikerjakanCount = {{ $dikerjakanCount ?? 0 }};

                            // Check if both counts are zero
                            @if ($selesaiCount == 0 && $dikerjakanCount == 0)
                                var ctx = document.getElementById('myPieChart').getContext('2d');
                                var data = {
                                    labels: ['Tidak ada data tersedia'],
                                    datasets: [
                                        {
                                            data: [1], // Set the data to 1 to avoid chart rendering errors
                                            backgroundColor: ['#dddddd'],
                                            borderWidth: 2,
                                        },
                                    ],
                                };

                                // Create the Pie Chart
                                var pieChart = new Chart(ctx, {
                                    type: 'pie',
                                    data: data,
                                    options: {
                                        responsive: true,
                                        plugins: {
                                            legend: {
                                                display: false,
                                            }
                                        },
                                    },
                                });
                            @else
                                var ctx = document.getElementById('myPieChart').getContext('2d');

                                var data = {
                                    labels: labels,
                                    datasets: [
                                        {
                                            data: [selesaiCount, dikerjakanCount],
                                            backgroundColor: ['#d3fbf9', '#7888fc'],
                                            borderWidth: 2,
                                        },
                                    ],
                                };

                                // Create the Pie Chart
                                var pieChart = new Chart(ctx, {
                                    type: 'pie',
                                    data: data,
                                    options: {
                                        responsive: true,
                                        plugins: {
                                            legend: {
                                                position: 'top',
                                            }
                                        },
                                    },
                                });
                            @endif
                        </script>


                </div>
        @endsection