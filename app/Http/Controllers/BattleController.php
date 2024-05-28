<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BattleController extends Controller
{
    public function showForm()
    {
        return view('battle.battle_form');
    }

    public function handleRequest(Request $request)
{
    $pokemon1Name = $request->input('pokemon1');
    $pokemon2Name = $request->input('pokemon2');

    // Fetch data for pokemon 1
    $pokemon1Data = $this->fetchPokemonData($pokemon1Name);

    // Fetch data for pokemon 2
    $pokemon2Data = $this->fetchPokemonData($pokemon2Name);

    // Get attack stats for both pokemons
    $pokemon1Attack = $pokemon1Data['stats'][1]['base_stat'];
    $pokemon2Attack = $pokemon2Data['stats'][1]['base_stat'];

    // Compare attack stats to determine the winner
    if ($pokemon1Attack > $pokemon2Attack) {
        $winner = $pokemon1Name;
    } elseif ($pokemon1Attack < $pokemon2Attack) {
        $winner = $pokemon2Name;
    } else {
        $winner = 'It\'s a tie!';
    }

    return view('battle.battle_result', [
        'pokemon1' => $pokemon1Name,
        'pokemon1Attack' => $pokemon1Attack,
        'pokemon2' => $pokemon2Name,
        'pokemon2Attack' => $pokemon2Attack,
        'winner' => $winner
    ]);
}

    private function fetchPokemonData($pokemonName)
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$pokemonName}");

        if ($response->ok()) {
            return $response->json();
        } else {
            abort(404, 'Pokemon not found');
        }
    }
}
