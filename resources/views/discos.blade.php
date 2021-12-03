@extends('layouts.main')

@section('title', 'Disco buscado')

@section('content')

<h1>Tela de Discos</h1>

@if ($busca != '')
<p>O usuario está buscando por: {{ $busca }}</p>
@endif

@endsection