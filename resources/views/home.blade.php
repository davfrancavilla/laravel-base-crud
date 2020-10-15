@extends('layout.app')
@section('title', 'Home')

@section('main')
@foreach ($data as $auto)
    <ul>
        <li>{{$auto->nome}}</li>
        <li>{{$auto->marca}}</li>
        <li>{{$auto->anno}}</li>
        <li>{{$auto->description}}</li>
    </ul>
@endforeach

<a href="{{route('autos.create')}}">Inserisci nuova auto</a>
    
@endsection