@extends('app')
@section('title', 'Lista de Produto')
@section('content')
<div class="card" >
            <div class="card-header" >
                Dethales do Produto {{$products->nome}}
            </div>
        </div>
        <div class="card-body" >
            <p><strong>ID: </strong> {{$products->id}} </p>
            <p><strong>Nome: </strong> {{$products->nome}} </p>
            <p><strong>Quantidade: </strong> {{$products->quantidade}} </p>
            <p><strong>Preço: </strong> {{$products->preco}} </p>
            <br>
            <a  class="btn btn-success" href="{{route('products.index')}}">Voltar para a lista</a>
        </div>
@endsection
