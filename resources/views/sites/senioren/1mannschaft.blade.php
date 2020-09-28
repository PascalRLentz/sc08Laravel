@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="news">
            <div class="news-header mb-3">
                <div class="row">
                    <div class="col-12">
                        <p class="h3 text-white">1. Mannschaft</p>
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
                                    <td>19:00 - 20:30</td>
                                    <td>-</td>
                                    <td>19:00 - 20:30</td>
                                    <td>-</td>
                                    <td>19:00 - 20:30</td>
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
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/1mannschaft/Mannschaft.jpg') }}" class="img-fluid" alt="Mannschafts Foto" style="width: 100%">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xs-12 col-sm-6">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/1mannschaft/ThomasGraf.jpg') }}" class="img-fluid rounded" style="width: 500px; width:500px;">
                    </div>
                    <div class="col-xs-12 text-xs-center col-sm-6">
                        <h3>Trainer</h3>
                        <hr>
                        <strong>Name: </strong> Thomas Graf
                        <br/>
                        <strong>Tel.: </strong> <a href="tel:01735100693" class="telephone">0173 / 5100693</a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xs-12 col-sm-6">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/1mannschaft/JosefRother.jpg') }}" class="img-fluid rounded" style="width: 500px; width:500px;">
                    </div>
                    <div class="col-xs-12 text-xs-center col-sm-6">
                        <h3>Torwart-Trainer</h3>
                        <hr>
                        <strong>Name: </strong> Josef Rother
                        <br/>
                        <strong>Tel.: </strong> <a href="tel:015730168704" class="telephone">01573 / 0168704</a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xs-12 col-sm-6">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/1mannschaft/BesimIsufi.jpg') }}" class="img-fluid rounded" style="width: 500px; width:500px;">
                    </div>
                    <div class="col-xs-12 text-xs-center col-sm-6">
                        <h3>Betreuer</h3>
                        <hr>
                        <strong>Name: </strong> Besim Isufi
                        <br/>
                        <strong>Tel.: </strong> <a href="tel:01782953852" class="telephone">0178 / 2953852</a>
                    </div>
                </div>
            </div>
            <div class="news-footer">
            </div>
        </div>
    </div>
    </div>
@endsection
