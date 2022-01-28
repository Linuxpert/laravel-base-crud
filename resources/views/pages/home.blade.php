@extends('layouts.main-layout')
@section('content')

    <h1>
        List:
    </h1>
    @foreach ($comics as $comic)
        <ul>
            <b>
                Fumetto:
                <a href="{{ route('show', $comic -> id) }}">
                    {{$comic -> title}}
                </a>

                - autore:{{$comic -> author}}
            </b>
        </ul>
    @endforeach
    
@endsection