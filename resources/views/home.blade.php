@extends('layouts.main-layout')

@section('content')
    <h1>Hello world!</h1>
    <ul>
        @foreach ($railways as $railway)
            <li>
                {{ $railway->agency }} : {{ $railway->start_station }} : {{ $railway->arrival_station }} :
                {{ $railway->departure_time }} : {{ $railway->arrival_time }} : {{ $railway->train_code }} :
                {{ $railway->carriages }} : {{ $railway->in_time }} : {{ $railway->deleted }}
            </li>
        @endforeach

    </ul>
@endsection
