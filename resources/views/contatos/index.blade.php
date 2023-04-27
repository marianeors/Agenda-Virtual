@extends('layouts.main')

@section('title', 'Contatos')

@section('content')



<div> Contatos
    <a href="/contatos/criar" class="btn btn-primary">Adicionar</a>

    <ul class="list-group">
        @foreach ($contatos as $contato)
        <li class="list-group-item">{{ $contato->nome }}</li>
        <ul>
           <li class="list-group-item">{{ $contato->email }}</li>
           <li class="list-group-item">{{ $contato->telefone }}</li>

        </ul>  
        @endforeach
    </ul>
</div>


@endsection