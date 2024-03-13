<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function index(){

   $client = new Client();

   $response = $client->get('https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=Cocktail');


   $body = $response->getBody()->getContents();


   $cocktailsData = json_decode($body, true);


   $cocktails = $cocktailsData['drinks'];


   return view('index', ['cocktails' => $cocktails]);
    }


    public function show($id)
    {
        $client = new Client();
        $response = $client->get('www.thecocktaildb.com/api/json/v1/1/lookup.php?i=' . $id);
        $body = $response->getBody()->getContents();
        $cocktailData = json_decode($body, true);
        
        // Assuming the API always returns data in the expected format
        $cocktail = $cocktailData['drinks'][0];

    
        return view('show', ['cocktail' => $cocktail]);
    }
    

    
}
