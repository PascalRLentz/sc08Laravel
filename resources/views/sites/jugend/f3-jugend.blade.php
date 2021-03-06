@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="news">
            <div class="news-header mb-3">
                <div class="row">
                    <div class="col-12">
                        <p class="h3 text-white">F3-Jugend</p>
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
                                    <td>17:00 - 18:30 <br>Berrendorf Rasenplatz</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>17:00 - 18:30 <br>Elsdorf Ascheplatz</td>
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
                        <p>Wolfang Diederichs</p>
                        <p><a href="tel:015772569637" class="telephone">01577 / 2569637</a></p>
                    </div>
                    <div class="col-6">
                        <p>Thomas Ebel</p>
                        <p><a href="tel:016096866851" class="telephone">0160 / 96866851</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-footer">

        </div>
    </div>
@endsection
