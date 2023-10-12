<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import the HTTP facade

class CocktailController extends Controller{
    public function getCocktailList(){
        // Make a GET request to the API to get the list of cocktails
        $response = Http::get('www.thecocktaildb.com/api/json/v1/1/search.php?f=a');

        // Check if the request was successful (status code 2xx)
        if ($response->successful()) {
            // Get the JSON data from the response
            $cocktails = $response->json();
            
            // Pass the data to a view for rendering
            return view('cocktails.list', ['cocktails' => $cocktails]);
        } else {
            // Handle the case where the request was not successful
            abort(500, 'Failed to retrieve cocktail data');
        }
    }

    public function getCocktailDetails($id){
        $response = Http::get("www.thecocktaildb.com/api/json/v1/1/lookup.php?i={$id}");

        if ($response->successful()) {
            $cocktail = $response->json()['drinks'][0];
            return view('cocktails.details', ['cocktail' => $cocktail]);
        } else {
            abort(500, 'Failed to retrieve cocktail details');
        }
    }
}
