<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAttackOnTitan(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://attackontitanapi.herokuapp.com/api/characters/');
        $resultado = json_decode($response->getBody()->getContents(), true);

        $personajes = [];
        foreach ($resultado as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'name' => $personaje['name'],
                'gender' => $personaje['gender'],
                'image' => $personaje['picture_url']
            ];
        }

        $response2 = $cliente->request('GET', 'https://attackontitanapi.herokuapp.com/api/titans/');
        $resultado2 = json_decode($response2->getBody()->getContents(), true);

        $titanes = [];
        foreach ($resultado2 as $titan) {
            $titanes[] = [
                'id' => $titan['id'],
                'name' => $titan['name'],
                'description' => $titan['description'],
                'character_id' => $titan['character_id'],
                'height_m' => $titan['height_m'],
                'picture_url' => $titan['picture_url']
            ];
        }
        
        return view('index', ['personajes' => $personajes, 'titanes' => $titanes]);
    }
}
