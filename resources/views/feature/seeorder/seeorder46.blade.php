@extends('feature/layout/main')
@section('title', 'Seeorder')

@section('content')
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Tema 46</h5>
                                <p>Data dari Kategori Tema 46.</p>
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
                                   
                                    @php
                                    use App\Models\Tema;
                                    $seeorders1 = Tema::latest()->paginate(5);
                                    @endphp

									    @foreach ($seeorders1 as $seeorders1)
                                        <tr>
                                            <td>{{ $seeorders1->nama_lengkap }}</td>
                                            <td>{{ $seeorders1->tema_category }}</td>
                                            <td>{{ $seeorders1->link_undangan }}</td>
                                            <td>2011/04/25</td>
                                            <td>2012/04/25</td>
                                            <td>
                                                <form action="{{ route('seeorders1.delete', $seeorders1->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                                <form action="{{ route('posts.show1', $seeorders1->id) }}">
                                                    @csrf
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