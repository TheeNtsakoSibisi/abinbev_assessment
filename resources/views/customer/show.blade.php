@extends('layout.layout')

@section('content')
            <h1>Showing Client {{ $client->name }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Client Name:</strong> {{ $client->name }}<br>
            <strong>Client City:</strong> {{ $client->city_id }}
        </p>
    </div>
@endsection