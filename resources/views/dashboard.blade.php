@extends('layouts.main')

@section('title', 'Museu do Vinil')

@section('content')

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Museu do Vinil</b></h2>
                    </div>
                </div>
            </div>
            @if (count($markets) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Artista</th>
                        <th>Valor</th>
                        <th>Ano</th>
                        <th>Acao</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($markets as $market)
                    @include('modals.update-market-modal', array('market' => $market))
                    @include('modals.delete-market-modal', array('market' => $market))
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td><a href="/market/{{ $market->id }}">{{ $market->name }}</a></td>
                        <td><a href="/market/{{ $market->id }}">{{ $market->artist }}</a></td>
                        <td><a href="/market/{{ $market->id }}">{{ $market->price }}</a></td>
                        <td><a href="/market/{{ $market->id }}">{{ $market->year }}</a></td>
                        <td>
                            <a href="#updateMarket{{ $market->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteMarket{{ $market->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>Você ainda não tem discos registrados, <a href="/market/create">cadastre um disco aqui</a></p>
            @endif
            <div class="clearfix">
                
                <div class="hint-text">Mostrando {{$markets->count()}} Markets</div>
                <ul class="pagination">
                    <!-- 
                    <li class="page-item disabled"><a href="#">Anterior</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Proximo</a></li>
                     -->
                </ul>
            </div>

        </div>
    </div>
</div>

@endsection