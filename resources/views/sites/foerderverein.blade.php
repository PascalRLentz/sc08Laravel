@extends('layouts.app')

@section('content')
<div class="container">
    <div class="news">
        <div class="news-header">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-white">Förderverein</h3>
                </div>
            </div>
        </div>
        <div class="news-content">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <img src="{{ asset('images/SC08/forderverein/Gruppenbild.jpg') }}" class="img-fluid">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xs-12 col-sm-6">
                    <img src="{{ asset('images/SC08/forderverein/tanjaLichte.jpg') }}" class="img-fluid rounded" style="width: 500px;">
                </div>
                <div class="col-xs-12 text-xs-center col-sm-6">
                    <h3>1. Vorsitzende</h3>
                    <hr>
                    <strong>Name: </strong> Tanja Lichte
                    <br/>
                    <strong>Tel.: </strong>
                    <br/>
                    <strong>Email: </strong><a href="mailto:tanja.lichte@web.de" class="email">tanja.lichte@web.de</a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xs-12 col-sm-6">
                    <img src="{{ asset('images/SC08/forderverein/svenKohlhey.jpg') }}" class="img-fluid rounded" style="width: 500px;">
                </div>
                <div class="col-xs-12 text-xs-center col-sm-6">
                    <h3>2. Vorsitzender</h3>
                    <hr>
                    <strong>Name: </strong> Sven Kolhey
                    <br/>
                    <strong>Tel.: </strong>
                    <br/>
                    <strong>Email: </strong><a href="mailto:sven@kolhey.de" class="email">sven@kolhey.de</a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xs-12 col-sm-6">
                    <img src="{{ asset('images/SC08/forderverein/alexanderHuetten.jpg') }}" class="img-fluid rounded" style="width: 500px;">
                </div>
                <div class="col-xs-12 text-xs-center col-sm-6">
                    <h3>Kassierer</h3>
                    <hr>
                    <strong>Name: </strong> Alexander Hütten
                    <br/>
                    <strong>Tel.: </strong>
                    <br/>
                    <strong>Email: </strong><a href="mailto:alexander.huetten@gmx.de" class="email">alexander.huetten@gmx.de</a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xs-12 col-sm-6">
                    <img src="{{ asset('images/SC08/forderverein/wolfangScholz.jpg') }}" class="img-fluid rounded" style="width: 500px;">
                </div>
                <div class="col-xs-12 text-xs-center col-sm-6">
                    <h3>Schriftführer</h3>
                    <hr>
                    <strong>Name: </strong> Wolfgang Scholz
                    <br/>
                    <strong>Tel.: </strong>
                    <br/>
                    <strong>Email: </strong><a href="mailto:wolf-scholz@t-online.de" class="email">wolf-scholz@t-online.de</a>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-12">
                    <h4>Im Gedenken an unserem ehemaligen 1 Vorsitzenden Heinz Losse.<br/>
                        Wir alle vom Verein haben Dir sehr viel zu verdanken.<br/>
                    </h4>
                    <img src="{{ asset('images/SC08/forderverein/heinzLosse.jpg') }}" class="img-fluid rounded" style="width:500px;">
                    <h4 class="mt-2">Wir vermissen Dich.</h4>
                </div>
            </div>
        </div>
        <div class="news-footer"></div>
    </div>
</div>
@endsection
