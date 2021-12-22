@extends('layouts.default')

@section("page_title", "Homepage Laravel Movies Database")

@section("content")
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-white py-3">Homepage Laravel Movies Database</h1>
        <pre>
            <code>Clicca su <a href="{{ url('movies') }}">movies</a> per visualizzare i contenuti del database</code>
        </pre>
    </div>
@endsection