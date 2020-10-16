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

<form method="POST" action="{{route('autos.store')}}">
    @csrf
    @method('POST')
    <label for="nome">Nome</label>
<input type="text" name="nome" value="{{old("nome")}}">
    <label for="nome">Marca</label>
    <input type="text" name="marca" value="{{old("marca")}}">
    <label for="nome">Anno</label>
    <input type="text" name="anno" value="{{old("anno")}}">
    <label for="nome">Descrizione</label>
    <input type="text" name="descrizione" value="{{old("descrizione")}}">
    <button type="submit">Invia</button>
</form>






<a href="{{route('autos.index')}}">Elenco auto</a>
    
@endsection