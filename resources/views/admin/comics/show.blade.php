@extends('layouts.dashboard')

@section('content')
  <h1>Stai visualizzando: {{$comic->title}}</h1>
  <p>Descrizione: {{$comic->description}}</p>
  <p>prezzo: {{$comic->price}} €</p>
  <p>Disponibilità: {{$comic->availability ? "Si" : "No"}}</p>

  @if($comic->cover)
    <img src="{{asset('storage/' . $comic->cover)}}" alt="">
  @endif

@endsection
