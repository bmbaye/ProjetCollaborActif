@extends('layouts.app')

@section('content')
    <h1>Listes</h1>
    <ul>
        @foreach ($listes as $liste)
            <li>
                <a href="{{ route('listes.show', $liste->id) }}">{{ $liste->nomListe }}</a>
            </li>
        @endforeach
    </ul>
@endsection
