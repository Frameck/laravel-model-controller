@extends('layouts.default')

@section("page_title", "Movies Database")

@section("content")
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-white py-3">Movies Database</h1>

        <pre>
            <ul>
                @foreach($movies as $key => $value)
                    <li>
                        <strong>id</strong> => <i>{{ $value['title'] }}</i>
                        <strong>Titolo</strong> => <i>{{ $value['title'] }}</i>
                        <strong>Titolo originale</strong> => <i>{{ $value['original_title'] }}</i>
                        <strong>Nazionalità</strong> => <i>{{ $value['nationality'] }}</i>
                        <strong>Date</strong> => <i>{{ $value['date'] }}</i>
                        <strong>Voto</strong> => <i>{{ $value['vote'] }}</i>
                    </li>
                @endforeach
            </ul>
        </pre>
    </div>
@endsection