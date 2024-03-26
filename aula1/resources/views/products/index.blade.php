@extends('app')
@section('title', 'Lista de Produtos')
@section('content')
<h1>Lista de Produtos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th>{{$product->id}}</th>
                        <td>
                            <a href="{{ route('products.show', $product) }}">{{$product->nome}}</a>
                        </td>
                        <td>{{$product->quantidade}}</td>
                        <td>{{$product->preco}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-success" href="{{route('products.create')}}">
            Cadastre aqui
        </a>
@endsection
