@extends('feature/layout/main')
@section('title', 'Theme')

@section('content')
                        <div class="row">

                        @php
                        $themePrefix = 'feature/theme/tema';
                        $seeOrderPrefix = 'feature/seeorder/seeorder';
                        $previewPrefix = 'feature/theme/preview/lihat';
                        @endphp

                        @for ($i = 1; $i <= 46; $i++)
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <img src="{{ asset('coba/images/card-bg.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-meet-header">
                                        <div class="card-meet-day">
                                            <h6>DATA</h6>
                                            <h3>7</h3>
                                        </div>
                                        <div class="card-meet-text">
                                            <h6>Tema ke {{ $i }}</h6>
                                            <p>Template Undangan</p>
                                        </div>
                                    </div>
                                    <!-- <p class="card-text m-b-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
                                    <a href="{{ url($themePrefix . $i) }}" class="btn btn-info">Buat</a>
                                    <a href="{{ url($seeOrderPrefix . $i) }}" class="btn btn-primary">Data</a>
                                    <a href="{{ url($previewPrefix . $i) }}" class="btn btn-success">Tampilan</a>
                                </div>
                            </div>
                        </div>
                        @endfor

                     </div>
                    </div>
                  </div>
                </div>
        
@endsection