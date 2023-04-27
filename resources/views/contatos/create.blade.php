@extends('layouts.main')

@section('title', 'Adicionar Contato')

@section('content')



<div>Novo Contato
    <form action="/contatos/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
            <label for="email" class="form-label">E-mail:</label>
            <input type="text" id="email" name="email" class="form-control">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

@endsection