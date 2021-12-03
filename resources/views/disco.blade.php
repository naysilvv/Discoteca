@extends('layouts.main')

@section('title', 'Disco buscado')

@section('content')

@if ($id != null)
<p>Exibindo disco id: {{ $id }}</p>
@endif

@endsection