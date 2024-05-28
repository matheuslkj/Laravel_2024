@extends('app')
@section('title', 'Batalha de Pokemon')
@section('content')

<body>
    <h1>Batalhem</h1>
    <form action="{{ route('battle.handle') }}" method="POST">
        @csrf
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="pokemon1" class="col-form-label" >Pokemon 1:</label>
            </div>
            <div class="col-auto">
                <input type="text" name="pokemon1" id="pokemon1" required class="form-control">
            </div>
            <br>
            <div class="col-auto">
                <label for="pokemon2" class="col-form-label">Pokemon 2:</label>
            </div>
            <div class="col-auto">
                <input type="text" name="pokemon2" id="pokemon2" required class="form-control">
            </div>
            <br>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Fight!</button>
            </div>
        </div>
    </form>
</body>
@endsection