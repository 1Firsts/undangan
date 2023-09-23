@extends('feature/layout/main')
@section('title', 'Home')

@section('content')
                <div class="row">
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Create Theme 1</h5>
                              <p class="card-description">Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they’re vertically centered with their associated form controls.</p>
                              <form>
                                  <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" id="inputEmail3" placeholder="Jane Doe">
                                    </div>
                                  </div>
                                  <fieldset disabled>
                                  <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Theme 1">
                                     </div>
                                  </div>
                                </fieldset>
                                  <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Photo 1</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="file" id="formFile">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Photo 2</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="file" id="formFile">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Photo 3</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="file" id="formFile">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Start Date</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="date" id="date">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">End Date</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="date" id="date">
                                    </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                          </div>
                      </div>
                  </div>
                        
                     </div>
                    </div>
                  </div>
                </div>      
@endsection