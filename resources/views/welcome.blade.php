@extends('layouts.main')

@section('title', 'Agenda Virtual')

@section('content')
<a href="/contatos" class="btn btn-primary">Exibir todos os contatos</a>
<div id="search-container" class="col-md-12">
    <h1>Busque contato</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

@endsection

