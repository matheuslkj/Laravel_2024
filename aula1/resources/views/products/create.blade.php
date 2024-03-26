@extends('app')
@section('title', 'Formulario de Cadastro')
@section('content')
<form action="{{route ('products.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
  </div>
  <div class="form-group">
    <label for="quantidade">Quantidade:</label>
    <input type="number" class="form-control" id="quantidade" placeholder="quantidade" name="quantidade">
  </div>
  <div class="form-group">
    <label for="preco">Preço:</label>
    <input type="number" class="form-control" id="preco" placeholder="Preço" name="preco">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Enviar</button>
</form>
@endsection
