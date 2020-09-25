@extends('layouts.app')

@section('content')
<!-- Content --->
<div id="content" class="container">
    <section>
        <div class="item-page">
            <div itemprop="articleBody">
                <div class="container">
                    @if (session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <h2>Anmeldung</h2>
                            <hr>
                        </div>
                    </div>
                    <form id="inputRegisterForm" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="first_name">Vorname*</label>
                            </div>
                            <div class="col-10">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Vorname eingeben" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="last_name">Nachname*</label>
                            </div>
                            <div class="col-10">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nachname eingeben" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email">Email*</label>
                            </div>
                            <div class="col-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email eingeben" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="telephone">Telefonnummer</label>
                            </div>
                            <div class="col-10">
                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telefonnummer eingeben">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="address">Addresse</label>
                            </div>
                            <div class="col-10">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Addresse eingeben">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="zip_code">Postleitzahl</label>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Postleitzahl eingeben">
                            </div>
                            <div class="col-2">
                                <label for="city">Ort</label>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Ort eingeben">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="association">Mannschaft*</label>
                            </div>
                            <div class="col-10">
                                <select class="custom-select" name="association" required>
                                    <option value="" selected disabled>Bitte wähl eine Mannschaft aus!</option>
                                    <option value="1. Mannschaft">1. Mannschaft</option>
                                    <option value="2. Mannschaft">2. Mannschaft</option>
                                    <option value="Alte Herren">Alte Herren</option>
                                    <option value="Torwart-trainer">Torwart-trainer</option>
                                    <option value="Schiedsrichter">Schiedsrichter</option>
                                    <option value="A-Jugend">A-Jugend</option>
                                    <option value="C-Jugend">C-Jugend</option>
                                    <option value="D1-Jugend">D1-Jugend</option>
                                    <option value="D2-Jugend">D2-Jugend</option>
                                    <option value="E1-Jugend">E1-Jugend</option>
                                    <option value="E2-Jugend">E2-Jugend</option>
                                    <option value="E3-Jugend">E3-Jugend</option>
                                    <option value="F1-Jugend">F1-Jugend</option>
                                    <option value="F2-Jugend">F2-Jugend</option>
                                    <option value="F3-Jugend">F3-Jugend</option>
                                    <option value="Bambini 1">Bambini 1</option>
                                    <option value="Bambini 2">Bambini 2</option>
                                    <option value="Mini-Bambinis">Mini-Bambinis</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="comment">Bemerkung</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                            </div>
                        </div>
                        <input type="submit" name="submit" value="Absenden" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
