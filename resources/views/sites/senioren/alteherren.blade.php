@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="news">
            <div class="news-header">
                <div class="row">
                    <div class="col-12 text-white">
                        <h3>Alte Herren</h3>
                    </div>
                </div>
            </div>
            <div class="news-content">
                <div class="row mb-3">
                    <div class="col-12">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenMannschaft.jpg') }}" class="img-fluid" alt="Mannschafts Foto" style="width: 100%">
                    </div>
                </div>
                <hr>
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-12" id="slider">
                        <div id="myCarousel" class="carousel slide shadow">
                            <!-- main slider carousel items -->
                            <div class="carousel-inner">
                                <div class="active carousel-item" data-slide-number="0">
                                    <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild001.jpg') }}" class="img-fluid">
                                </div>
                                <div class="carousel-item" data-slide-number="1">
                                    <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild002.jpg') }}" class="img-fluid">
                                </div>
                                <div class="carousel-item" data-slide-number="2">
                                    <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild003.jpg') }}" class="img-fluid">
                                </div>
                                <div class="carousel-item" data-slide-number="3">
                                    <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild004.jpg') }}" class="img-fluid">
                                </div>
                                <div class="carousel-item" data-slide-number="4">
                                    <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild005.jpg') }}" class="img-fluid">
                                </div>
                                <div class="carousel-item" data-slide-number="5">
                                    <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild006.jpg') }}" class="img-fluid">
                                </div>

                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                            <!-- main slider carousel nav controls -->


                            <ul class="carousel-indicators list-inline mx-auto border px-2">
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild001.jpg') }}" class="img-fluid">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild002.jpg') }}" class="img-fluid">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild003.jpg') }}" class="img-fluid">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild004.jpg') }}" class="img-fluid">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild005.jpg') }}" class="img-fluid">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/alte_herren/alte_herrenBild006.jpg') }}" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-footer">

            </div>
        </div>
    </div>
@endsection
