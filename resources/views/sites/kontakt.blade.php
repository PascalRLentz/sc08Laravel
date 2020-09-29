@extends('layouts.app')

@section('content')
<div class="container">
    <div class="news">
        <div class="news-header mb-3">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-white">Kontakt aufnehmen</h2>
                </div>
            </div>
        </div>
        <div class="news-content">
            <form method="POST">
                @csrf
                @if (session('status'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-group row">
                    <div class="col-2 d-none d-lg-block">
                        <label for="first_name">Vorname*</label>
                    </div>
                    <div class="col-md-12 col-lg-10">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Vorname eingeben" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2 d-none d-lg-block">
                        <label for="last_name">Nachname*</label>
                    </div>
                    <div class="col-md-12 col-lg-10">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nachname eingeben" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2 d-none d-lg-block">
                        <label for="email">Email*</label>
                    </div>
                    <div class="col-md-12 col-lg-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email eingeben" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2 d-none d-lg-block">
                        <label for="message">Bemerkung*</label>
                    </div>
                    <div class="col-md-12 col-lg-10">
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <small>Beim Absenden akzeptieren Sie unsere Nutzungsbedinungen sowie unsere <a href="#" data-toggle="modal" data-target="#datenschutz">Datenschutzerklärung</a>.</small>
                    </div>
                    <div class="col-12 text-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Absenden</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="news-footer"></div>
    </div>
</div>
@endsection
