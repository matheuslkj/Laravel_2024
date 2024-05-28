@extends('app')
@section('title', 'Resultado')
@section('content')
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Resultado da Batalha</h1>
        <div class="mb-3">
            <p>{{ $pokemon1 }} - Attack: {{ $pokemon1Attack }}</p>
            <p>{{ $pokemon2 }} - Attack: {{ $pokemon2Attack }}</p>
            <p class="fw-bold">O vencedor é: {{ $winner }}</p>
        </div>
        <a href="{{ route('battle.form') }}" class="btn btn-primary">Back to Form</a>
    </div>
</body>
@endsection
