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
                                          <th rowspan="2">Name</th>
                                          <th colspan="3" style="text-align:center">Data Information</th>
                                      </tr>
                                      <tr>
                                          <th>Category</th>
                                          <th>Start Date</th>
                                          <th>End Date</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Tiger Nixon</td>
                                          <td>System Architect</td>
                                          <td>2011/04/25</td>
                                          <td>2011/04/25</td>
                                      </tr>
                                      <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/25</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/25</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/25</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/25</td>
                                    </tr>
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