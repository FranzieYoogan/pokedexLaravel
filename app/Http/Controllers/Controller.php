<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getPokemon() {
        

        $response = json_decode(Http::get('https://pokeapi.co/api/v2/pokemon?limit=25&offset=0'));

        $results = $response->results;
       
     

              

            

        

        return view('welcome', ['results' => $results]);
    }
}
