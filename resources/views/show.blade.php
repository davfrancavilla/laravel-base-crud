@extends('layout.app')
@section('title', 'Home')

@section('main')


    <ul>
        <li>{{$auto->nome}}</li>
        <li>{{$auto->marca}}</li>
        <li>{{$auto->anno}}</li>
        <li>{{$auto->description}}</li>
    </ul>


<a href="{{route('autos.index')}}">Home</a>
    
@endsection