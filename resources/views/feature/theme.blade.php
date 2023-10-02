@extends('feature/layout/main')
@section('title', 'Theme')

@section('content')
                        <div class="row">

                        @php
                        $themePrefix = 'feature/theme/tema';
                        $seeOrderPrefix = 'feature/seeorder/seeorder';

                        $themeCounts = [];

                        for ($i = 1; $i <= 45; $i++) {
                            $themeCount = DB::table('data_undangan')
                                ->where('tema_category', 'Tema ' . $i)
                                ->where(function ($query) use ($i) {
                                    $query->where('tema_category', 'Tema ' . $i, '%<h6>DATA</h6>%')
                                        ->orWhere('tema_category', 'Tema ' . $i, '%<h3>' . $i . '</h3>%');
                                })
                                ->count();

                                $themeCounts[$i] = $themeCount;
                            }
                        @endphp

                        @foreach (range(1, 45) as $j)
                            <div class="col-md-12 col-lg-4">
                                <div class="card">
                                    <img src="{{ asset('coba/images/gambar' . $j . '.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="card-meet-header">
                                            <div class="card-meet-day">
                                                <h6>DATA</h6>
                                                <p>{{ $themeCounts[$j] }}</p>
                                            </div>
                                            <div class="card-meet-text">
                                                <h6>Tema ke {{ $j }}</h6>
                                                <p>Template Undangan</p>
                                            </div>
                                        </div>
                                        <!-- <p class="card-text m-b-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
                                        <a href="{{ url($themePrefix . $j) }}" class="btn btn-info">Buat</a>
                                        <a href="{{ url($seeOrderPrefix . $j) }}" class="btn btn-primary">Lihat Data</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                     </div>
                    </div>
                  </div>
                </div>
        
@endsection