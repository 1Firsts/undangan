@extends('feature/layout/main')
@section('title', 'Seeorder')
@section('content')

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Tema 15</h5>
                                <p>Data dari Kategori Tema 15.</p>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                    @foreach ($seeorders15 as $seeorder)
                                        <tr>
                                            <td>{{ $seeorder->nama_pelanggan }}</td>
                                            <td>{{ $seeorder->tema_category }}</td>
                                            <td>
                                                <form action="{{ route('seeorder15.delete', ['id' => $seeorder->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                                <form action="{{ route('posts.show15', ['id' => $seeorder->id], false) }}">
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