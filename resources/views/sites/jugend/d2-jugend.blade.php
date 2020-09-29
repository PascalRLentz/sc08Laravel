@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="news">
            <div class="news-header mb-3">
                <div class="row">
                    <div class="col-12">
                        <p class="h3 text-white">D2-Jugend</p>
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
                                    <td>17:00 - 18:30 <br>Berrendorf Rasenplatz</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>17:00 - 18:30 <br>Berrendorf Rasenplatz</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <b>Trainer</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Harald Spix</p>
                        <p><a href="tel:016094916763" class="telephone">0160 / 94916763</a></p>
                    </div>
                    <div class="col-6">
                        <p>Andreas Kreuer</p>
                        <p><a href="tel:01622536018" class="telephone">0162 / 2536018</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-footer">

        </div>
    </div>
    </div>
@endsection
