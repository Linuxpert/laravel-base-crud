@extends('layouts.main-layout')
@section('content')
    <div>
        <h1>
            titolo fumetto: {{$comic -> title}}, {{$comic -> pages}} pages
        </h1>

        <h3>
            autore fumetto: {{$comic -> author}}
        </h3>

        <p>
            data uscita fumetto: {{$comic -> release_date}}
        </p>
    </div>
@endsection