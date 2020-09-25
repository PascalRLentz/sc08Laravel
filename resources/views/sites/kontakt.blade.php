@extends('layouts.app')

@section('content')
<div class="container">
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
        <div class="row">
            <div class="col-12">
                <h2>Kontakt</h2>
                <hr>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-2">
                <label for="first_name">Vorname</label>
            </div>
            <div class="col-10">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Vorname eingeben" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-2">
                <label for="last_name">Nachname</label>
            </div>
            <div class="col-10">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nachname eingeben" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-2">
                <label for="email">Email</label>
            </div>
            <div class="col-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email eingeben" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-2">
                <label for="message">Bemerkung</label>
            </div>
            <div class="col-10">
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Absenden</button>
    </form>
</div>
@endsection
