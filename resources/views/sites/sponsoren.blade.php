@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($files as $file)
                <div class="col-lg-12 col-xl-2">
                    <img class="img-responsive" src="{{ \Illuminate\Support\Facades\URL::asset('storage/'.$file['path']) }}" style="max-width: 100%;" alt="Sponsoren Logos">
                </div>
            @endforeach
        </div>
@endsection
