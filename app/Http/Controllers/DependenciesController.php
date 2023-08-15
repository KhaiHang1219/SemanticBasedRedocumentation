<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependency;
use GuzzleHttp\Client;

class DependenciesController extends Controller
{
    //
    public function index()
    {
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllDependencies';
        try {
            $response = $client->get($apiURL);
            $jsonResponse = $response->getBody()->getContents();
            $dataArray = json_decode($jsonResponse, true);
            return view('display-dependency', ['Dependencies' => $dataArray]);
        } catch(\Excrption $e){
            return view('display-dependency', ['error' => $e->getMessage()]);
        }
        
    }

    public function search(Request $req){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetDependenciesByClass/'.''.$req->className;
        try {
            $response = $client->get($apiURL);
            $jsonResponse = $response->getBody()->getContents();
            $dataArray = json_decode($jsonResponse, true);
            return view('display-dependency', ['Dependencies' => $dataArray]);
        } catch(\Excrption $e){
            return view('display-dependency', ['error' => $e->getMessage()]);
        }
    }
}
