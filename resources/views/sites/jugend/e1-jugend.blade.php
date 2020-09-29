@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="news">
            <div class="news-header mb-3">
                <div class="row">
                    <div class="col-12">
                        <p class="h3 text-white">E1-Jugend</p>
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
                                    <td>17:45 - 19:15 <br>Berrendorf Rasenplatz</td>
                                    <td>-</td>
                                    <td>17:45 - 19:15 <br>Berrendorf Rasenplatz</td>
                                    <td>-</td>
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
                        <p>Dustin Kahl</p>
                        <p><a href="tel:017646024055" class="telephone">0176 / 46024055</a></p>
                    </div>
                    <div class="col-6">
                        <p>Rene Heller</p>
                        <p><a href="tel:01733205574" class="telephone">0173 / 3205574</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-footer">

        </div>
    </div>
@endsection
