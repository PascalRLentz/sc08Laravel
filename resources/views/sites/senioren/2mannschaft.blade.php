@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="news">
            <div class="news-header mb-3">
                <div class="row">
                    <div class="col-12">
                        <p class="h3 text-white">2. Mannschaft</p>
                    </div>
                </div>
            </div>
            <div class="news-content">
                <div class="row mb-3">
                    <div class="col-12">
                        <h3>
                            Trainingszeiten
                        </h3>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead>
                                <tr>
                                    <th>Montag</th>
                                    <th>Dienstag</th>
                                    <th>Mittwoch</th>
                                    <th>Donnerstag</th>
                                    <th>Freitag</th>
                                    <th>Samstag</th>
                                    <th>Sonntag</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>-</td>
                                    <td>19:00 - 20:30</td>
                                    <td>-</td>
                                    <td>19:00 - 20:30</td>
                                    <td>In der Vorbereitung am Freitag</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/2mannschaft/Mannschaft.jpg') }}" class="img-fluid" alt="Mannschafts Foto" style="width: 100%">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xs-12 col-sm-6">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/2mannschaft/UweStark.jpg') }}" class="img-fluid rounded" style="width: 500px; width:500px;">
                    </div>
                    <div class="col-xs-12 text-xs-center col-sm-6">
                        <h3>Trainer</h3>
                        <hr>
                        <strong>Name: </strong> Uwe Stark
                        <br/>
                        <strong>Tel.: </strong> <a href="tel:01722654771" class="telephone">0172 / 2654771</a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xs-12 col-sm-6">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/2mannschaft/HeinzPeter.jpg') }}" class="img-fluid rounded" style="width: 500px; width:500px;">
                    </div>
                    <div class="col-xs-12 text-xs-center col-sm-6">
                        <h3>Co-Trainer</h3>
                        <hr>
                        <strong>Name: </strong> Heinz-Peter (HP) Jülich
                        <br/>
                        <strong>Tel.: </strong> <a href="tel:01776563289" class="telephone">0177 / 6563289</a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xs-12 col-sm-6">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/2mannschaft/DirkDilley.jpg') }}" class="img-fluid rounded" style="width: 500px; width:500px;">
                    </div>
                    <div class="col-xs-12 text-xs-center col-sm-6">
                        <h3>Co-Trainer</h3>
                        <hr>
                        <strong>Name: </strong> Dirk Dilley
                        <br/>
                        <strong>Tel.: </strong> <a href="tel:015255713151" class="telephone">01525 / 5713151</a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xs-12 col-sm-6">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/2mannschaft/MichaelBuettsch.jpg') }}" class="img-fluid rounded" style="width: 500px; width:500px;">
                    </div>
                    <div class="col-xs-12 text-xs-center col-sm-6">
                        <h3>Team-Manager</h3>
                        <hr>
                        <strong>Name: </strong> Michael Büttsch
                    </div>
                </div>
            </div>
            <div class="news-footer">
            </div>
        </div>
    </div>
    </div>
@endsection
