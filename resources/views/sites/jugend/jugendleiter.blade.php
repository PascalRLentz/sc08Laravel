@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="news">
            <div class="news-header">
                <div class="row">
                    <div class="col-12">
                        <p class="h3 text-white">Jugendleiter</p>
                    </div>
                </div>
            </div>
            <div class="news-content">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/jugend/jugendvorstand/Jugendleiter.jpg') }}" class="img-fluid" alt="Jugendleiter">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <p>Name: Tobias Hänsel</p>
                        <p>Mobil: <a href="tel:015209032075" class="telephone">0152 - 09032075</a></p>
                    </div>
                </div>
            </div>
            <div class="news-footer">

            </div>
        </div>
    </div>
@endsection
