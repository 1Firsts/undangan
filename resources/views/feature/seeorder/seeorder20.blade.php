@extends('feature/layout/main')
@section('title', 'Home')

@section('content')
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Theme 1</h5>
                                <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.</p>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Link</th>
                                            <th>Start date</th>
                                            <th>End date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>Theme 1</td>
                                            <td>www.test.com</td>
                                            <td>2011/04/25</td>
                                            <td>2012/04/25</td>
                                            <td>
                                                <button type="button" class="btn btn-danger m-b-xs">Delete</button>
                                                <button type="button" class="btn btn-warning m-b-xs">Ubah</button>
                                                <button type="button" class="btn btn-info m-b-xs">Lihat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>Theme 1</td>
                                            <td>www.test.com</td>
                                            <td>2011/04/25</td>
                                            <td>2012/04/25</td>
                                            <td>
                                                <button type="button" class="btn btn-danger m-b-xs">Delete</button>
                                                <button type="button" class="btn btn-warning m-b-xs">Ubah</button>
                                                <button type="button" class="btn btn-info m-b-xs">Lihat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>Theme 1</td>
                                            <td>www.test.com</td>
                                            <td>2011/04/25</td>
                                            <td>2012/04/25</td>
                                            <td>
                                                <button type="button" class="btn btn-danger m-b-xs">Delete</button>
                                                <button type="button" class="btn btn-warning m-b-xs">Ubah</button>
                                                <button type="button" class="btn btn-info m-b-xs">Lihat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>Theme 1</td>
                                            <td>www.test.com</td>
                                            <td>2011/04/25</td>
                                            <td>2012/04/25</td>
                                            <td>
                                                <button type="button" class="btn btn-danger m-b-xs">Delete</button>
                                                <button type="button" class="btn btn-warning m-b-xs">Ubah</button>
                                                <button type="button" class="btn btn-info m-b-xs">Lihat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>Theme 1</td>
                                            <td>www.test.com</td>
                                            <td>2011/04/25</td>
                                            <td>2012/04/25</td>
                                            <td>
                                                <button type="button" class="btn btn-danger m-b-xs">Delete</button>
                                                <button type="button" class="btn btn-warning m-b-xs">Ubah</button>
                                                <button type="button" class="btn btn-info m-b-xs">Lihat</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                   
@endsection