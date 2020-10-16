@extends('layout.app')
@section('title', 'Form')

@section('main')

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form method="POST" action="{{(!empty($auto)) ? route('autos.update', $auto->id) : route('autos.store')}}">
    @csrf
    @if (!empty($auto))
        @method('PATCH')
        <input type="hidden" name="id" value="{{$auto->id}}">
    @else
        @method('POST')
    @endif
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="{{(!empty($auto)) ? $auto->nome : old("nome")}}">
    <label for="nome">Marca</label>
    <input type="text" name="marca" value="{{(!empty($auto)) ? $auto->marca : old("marca")}}">
    <label for="nome">Anno</label>
    <input type="text" name="anno" value="{{(!empty($auto)) ? $auto->anno : old("anno")}}">
    <label for="nome">Descrizione</label>
    <input type="text" name="description" value="{{(!empty($auto)) ? $auto->description : old("description")}}">
    <button type="submit">{{(!empty($auto)) ? 'Modifica' : 'Invia'}}</button>
</form>






<a href="{{route('autos.index')}}">Elenco auto</a>
    
@endsection