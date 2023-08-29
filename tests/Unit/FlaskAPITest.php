<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class FlaskAPITest extends TestCase
{
    public function test_ResponseMethodApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllMethod';

        $response =  $client->get($apiURL);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_GetAllMethodApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllMethod';

        $response =  $client->get($apiURL);
        $jsonResponse = $response->getBody()->getContents();
        $dataArray = json_decode($jsonResponse, true);
        foreach($dataArray as $data){
            $this->assertArrayHasKey('Relationship', $data);
            $this->assertEquals("Has Method",$data['Relationship']);
        }
    }

    public function test_GetMethodByClassApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetMethodByClass/usercontroller';

        $response =  $client->get($apiURL);
        $jsonResponse = $response->getBody()->getContents();
        $dataArray = json_decode($jsonResponse, true);
        foreach($dataArray as $data){
            $this->assertArrayHasKey('Relationship', $data);
            $this->assertEquals("usercontroller",$data['Class']);
            $this->assertEquals("Has Method",$data['Relationship']);
        }
    }

    public function test_ResponseVariableApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllVariable';

        $response =  $client->get($apiURL);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_GetAllVariableApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllVariable';

        $response =  $client->get($apiURL);
        $jsonResponse = $response->getBody()->getContents();
        $dataArray = json_decode($jsonResponse, true);
        foreach($dataArray as $data){
            $this->assertArrayHasKey('Relationship', $data);
            $this->assertEquals("Has Variable",$data['Relationship']);
        }
    }

    public function test_GetVariableByClassApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetVariableByClass/usercontroller';

        $response =  $client->get($apiURL);
        $jsonResponse = $response->getBody()->getContents();
        $dataArray = json_decode($jsonResponse, true);
        foreach($dataArray as $data){
            $this->assertArrayHasKey('Relationship', $data);
            $this->assertEquals("usercontroller",$data['Class']);
            $this->assertEquals("Has Variable",$data['Relationship']);
        }
    }

    public function test_ResponseDependenciesApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllDependencies';

        $response =  $client->get($apiURL);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_GetAllDependenciesApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllDependencies';

        $response =  $client->get($apiURL);
        $jsonResponse = $response->getBody()->getContents();
        $dataArray = json_decode($jsonResponse, true);
        foreach($dataArray as $data){
            $this->assertArrayHasKey('Relationship', $data);
            $this->assertEquals("Has Dependent",$data['Relationship']);
        }
    }

    public function test_GetDependenciesByClassApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetDependenciesByClass/usercontroller';

        $response =  $client->get($apiURL);
        $jsonResponse = $response->getBody()->getContents();
        $dataArray = json_decode($jsonResponse, true);
        foreach($dataArray as $data){
            $this->assertArrayHasKey('Relationship', $data);
            $this->assertEquals("usercontroller",$data['Class']);
            $this->assertEquals("Has Dependent",$data['Relationship']);
        }
    }

    public function test_ResponseMetricsApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllMetric';

        $response =  $client->get($apiURL);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_GetAllMetricApi(){
        $client = new Client();
        $apiURL = 'http://127.0.0.1:5000/GetAllMetric';

        $response =  $client->get($apiURL);
        $jsonResponse = $response->getBody()->getContents();
        $dataArray = json_decode($jsonResponse, true);
        foreach($dataArray as $data){
            $this->assertArrayHasKey('Relationship', $data);
            $this->assertEquals("Has Attribute",$data['Relationship']);
        }
    }
    
}
