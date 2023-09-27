@extends('feature/layout/main')
@section('title', 'Seeorder')
@section('content')

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Tema 17</h5>
                                <p>Data dari Kategori Tema 17.</p>
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
                                   
                                    @foreach ($seeorders17 as $seeorder)
                                        <tr>
                                            <td>{{ $seeorder->nama_lengkap }}</td>
                                            <td>{{ $seeorder->tema_category }}</td>
                                            <td>{{ $seeorder->link_undangan }}</td>
                                            <td>2011/04/25</td>
                                            <td>2012/04/25</td>
                                            <td>
                                                <form action="{{ route('seeorder17.delete', ['id' => $seeorder->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                                <form action="{{ route('posts.show17', ['id' => $seeorder->id], false) }}">
                                                    <button type="submit" class="btn btn-info">Lihat</button>
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
                   
@endsection