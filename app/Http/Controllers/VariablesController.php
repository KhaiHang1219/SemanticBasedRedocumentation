<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variable;
use GuzzleHttp\Client;

class VariablesController extends Controller
{
    //
    public function index()
    {
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllVariable';

        try {
            $response = $client->get($apiURL);
            $jsonResponse = $response->getBody()->getContents();
            $dataArray = json_decode($jsonResponse, true);
            return view('display-variable', ['Variables' => $dataArray]);
        } catch(\Excrption $e){
            return view('display-variable', ['error' => $e->getMessage()]);
        }
        
    }

    public function search(Request $req){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetVariableByClass/'.''.$req->className;
        try {
            $response = $client->get($apiURL);
            $jsonResponse = $response->getBody()->getContents();
            $dataArray = json_decode($jsonResponse, true);
            return view('display-variable', ['Variables' => $dataArray]);
        } catch(\Excrption $e){
            return view('display-variable', ['error' => $e->getMessage()]);
        }
    }
}
