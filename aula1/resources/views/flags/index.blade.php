@extends('app') @section('title', 'Lista de Flags') @section('content') <h1>Lista de Flags</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Chave</th>
            <th>Valor</th>
            <th>Descriçaõ</th>
        </tr>
    </thead>
    <tbody> @foreach ($flags as $flag) <tr>
            <th>{{$flag->id}}</th>
            <td> <a href="">{{$flag->chave}}</a> </td>
            <td>{{$flag->valor}}</td>
            <td>{{$flag->descricao}}</td>
            <td></td>
        </tr> @endforeach </tbody>
</table> <a class="btn btn-success" href=""> Cadastre aqui </a> @endsection