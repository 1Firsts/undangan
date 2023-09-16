@extends('feature/layout/main')
@section('title', 'Home')

@section('content')
    <div class="row">
            <div class="col-md-6 col-xl-3">
              <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">New Customers</h5>
                    <h2>132</h2>
                    <p>From last week</p>
                    <div class="progress">
                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <h2>287</h2>
                    <p>Orders in waitlist</p>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card stat-widget">
                  <div class="card-body">
                      <h5 class="card-title">Monthly Profit</h5>
                      <h2>7.4K</h2>
                      <p>For last 30 days</p>
                      <div class="progress">
                          <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="card stat-widget">
                  <div class="card-body">
                      <h5 class="card-title">Orders</h5>
                      <h2>87</h2>
                      <p>Orders in waitlist</p>
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
                    <h5 class="card-title">Revenue</h5>
                      <div id="apex1"></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-4">
                 <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Tasks Overview</h5>
                        
                        <div class="transactions-list">
                          <div class="tr-item">
                            <div class="tr-company-name">
                              <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                <i data-feather="user"></i>
                              </div>
                              <div class="tr-text">
                                <a href="#"><h4>Project Managment</h4></a>
                                <p>Management</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="transactions-list">
                          <div class="tr-item">
                            <div class="tr-company-name">
                              <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                <i data-feather="user"></i>
                              </div>
                              <div class="tr-text">
                                <a href="#"><h4>Design</h4></a>
                                <p>Creative</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="transactions-list">
                          <div class="tr-item">
                            <div class="tr-company-name">
                              <div class="tr-icon tr-card-icon tr-card-bg-secondary">
                                <i data-feather="user"></i>
                              </div>
                              <div class="tr-text">
                                <a href="#"><h4>Financial Accounting</h4></a>
                                <p>Finance</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="transactions-list">
                          <div class="tr-item">
                            <div class="tr-company-name">
                              <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                <i data-feather="user"></i>
                              </div>
                              <div class="tr-text">
                                <a href="#"><h4>Testing</h4></a>
                                <p>Manager</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="transactions-list">
                          <div class="tr-item">
                            <div class="tr-company-name">
                              <div class="tr-icon tr-card-icon tr-card-bg-secondary text-secondary">
                                <i data-feather="user"></i>
                              </div>
                              <div class="tr-text">
                                <a href="#"><h4>Development</h4></a>
                                <p>Developers</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
            </div>           
@endsection