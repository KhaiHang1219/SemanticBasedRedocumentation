<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metric;
use GuzzleHttp\Client;

class MetricsController extends Controller
{
    //
    public function index()
    {
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllMetric';

        try{
            $response = $client->get($apiURL);
            $jsonResponse = $response->getBody()->getContents();
            $dataArray = json_decode($jsonResponse, true);
            return view('display-metric', ['Metrics' => $dataArray]);
        }catch(\Excrption $e){
            return view('display-metric', ['error' => $e->getMessage()]);
        }
        
    }

}
