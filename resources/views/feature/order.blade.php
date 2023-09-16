@extends('feature/layout/main')
@section('title', 'Order')

@section('content')
                <div class="row">
                  <div class="col-md-12 col-lg-8">
                      <div class="card table-widget">
                          <div class="card-body">
                              <h5 class="card-title">Recent Orders</h5>
                              <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Anna Doe</th>
                                    <td>Theme 1</td>
                                    <td>20</td>
                                    <td><span class="badge bg-info">Dikerjakan</span></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">John Doe</th>
                                    <td>Theme 2</td>
                                    <td>25</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Anna Doe</th>
                                    <td>Theme 3</td>
                                    <td>20</td>
                                    <td><span class="badge bg-danger">Batal</span></td>
                                  </tr>
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