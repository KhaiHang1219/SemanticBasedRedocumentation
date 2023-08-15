<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Method;
use GuzzleHttp\Client;


class MethodsController extends Controller
{
    //
    public function index(Request $req){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllMethod';

        try {
            $response = $client->get($apiURL);
            $jsonResponse = $response->getBody()->getContents();
            $dataArray = json_decode($jsonResponse, true);
            return view('display-method', ['Methods' => $dataArray]);
        } catch(\Excrption $e){
            return view('display-method', ['error' => $e->getMessage()]);
        }
    }
    public function search(Request $req){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetMethodByClass/'.''.$req->className;
        try {
            $response = $client->get($apiURL);
            $jsonResponse = $response->getBody()->getContents();
            $dataArray = json_decode($jsonResponse, true);
            return view('display-method', ['Methods' => $dataArray]);
        }catch(\Excrption $e){
            return view('display-method', ['error' => $e->getMessage()]);
        }

    }
    // public function index(){
    //     $Methods = Method::get();
    //     return view('display-method', ['Methods' => $Methods]);
    // }

    // public function search(Request $req){
    //     $Methods = Method::where('Class', $req->className)->get();
    //     return view('display-method', ['Methods' => $Methods]);
    // }
}
