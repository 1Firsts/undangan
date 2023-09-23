@extends('feature/layout/main')
@section('title', 'Order')

@section('content')

                <div class="row">
                  <div class="col-md-12 col-lg-8">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Data Transaksi</h5>
                              <p>
                                <a href="{{ url('feature/create-order') }}">
                                  <i data-feather="edit"></i>
                                  <i class="fas fa-chevron"> Buat Data</i>
                                </a>Baru untuk mempermudah hitungan Transaksi Pembeli
                              </p>
                              
                              <div class="table-responsive">
                              <table id="complex-header" class="display" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th rowspan="2">Customer</th>
                                          <th colspan="6" style="text-align:center">Data Information</th>
                                      </tr>
                                      <tr>
                                          <th>Category</th>
                                          <th>Jumlah</th>
                                          <th>Start Date</th>
                                          <th>End Date</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    
                                  @foreach ($orders as $order)
                                      <tr>
                                          <td>{{ $order->customer }}</td>
                                          <td>{{ $order->category }}</td>
                                          <td>{{ $order->jumlah }}</td>
                                          <td>{{ $order->created_at }}</td>
                                          <td>{{ $order->updated_at }}</td>
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
                          <h5 class="card-title">Orders</h5>
                          <div id="apex2"></div>
                      </div>
                  </div>
                </div>

                </div>
        @endsection