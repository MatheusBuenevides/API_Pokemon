<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokemonsController extends Controller
{
    public function buscar(){
        $client = new Client(['base_uri' => env('SIMPLUS_API_URL')]);
        $data = $client->request('GET', 'pokemon', [
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ]);
        $response = json_decode($data->getBody(), true);

        return $response["results"];
        // return view('pokemon.buscar')->with('data', $response["results"]);
    }

    public function pesquisa($id){
        $client = new Client(['base_uri' => env('SIMPLUS_API_URL')]);
        $data = $client->request('GET', 'pokemon/'.$id, [
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ]);
        $response = json_decode($data->getBody(), true);

        return $response;
    }
}
