@extends('app')
@section('title', 'Formulario de Cadastro')
@section('content')
<form action="{{route ('clients.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
  </div>
  <div class="form-group">
    <label for="endereco">Endereço:</label>
    <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco">
  </div>
  <div class="form-group">
    <label for="observacao">Observação:</label>
    <textarea class="form-control" id="observacao" rows="3" name="observacao"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Enviar</button>
</form>
@endsection
