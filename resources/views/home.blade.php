@extends('layout.app')
@section('title', 'Home')

@section('main')
@foreach ($data as $auto)
    <ul>
    <li><a href="{{route('autos.show', $auto->id)}}">{{$auto->nome}}</a></li>
        <li>{{$auto->marca}}</li>
        <li>{{$auto->anno}}</li>
        <li>{{$auto->description}}</li>
        <li><a href="{{route('autos.edit', $auto->id)}}">Modifica</a></li>
        <li>
        <form action="{{route('autos.destroy', $auto->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Cancella</button>
        </form>
        </li>
    </ul>
@endforeach

<a href="{{route('autos.create')}}">Inserisci nuova auto</a>
    
@endsection