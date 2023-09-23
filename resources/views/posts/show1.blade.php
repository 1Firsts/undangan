@extends('feature/theme/preview/lihat1')
@section('title', 'Show')

@section('content')
<td>{{ $seeorders1->nama_lengkap }}</td>
<td>{{ $seeorders1->tema_category }}</td>
<td>{{ $seeorders1->link_undangan }}</td>
@endsection