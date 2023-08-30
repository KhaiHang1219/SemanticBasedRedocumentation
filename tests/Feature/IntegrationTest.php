<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IntegrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_MethodIntegration()
    {
        $response = $this->get('/Method');
        $response->assertStatus(200);
        $response->assertViewIs('display-method');
        $response->assertSee('Class Methods');
    }

    public function test_GetMethodByClassIntegration()
    {
        $data =[
            'className' => 'usercontroller'
        ];

        $response = $this->post('/searchMethodByClass',$data);
        $response->assertStatus(200);
        $response->assertViewIs('display-method');
        $response->assertSee('usercontroller');
    }

    public function test_VariableIntegration()
    {
        $response = $this->get('/Variable');
        $response->assertStatus(200);
        $response->assertViewIs('display-variable');
        $response->assertSee('Class Variable');
    }

    public function test_GetVariableByClassIntegration()
    {
        $data =[
            'className' => 'usercontroller'
        ];

        $response = $this->post('/searchVariableByClass',$data);
        $response->assertStatus(200);
        $response->assertViewIs('display-variable');
        $response->assertSee('usercontroller');
    }

    public function test_DependencyIntegration()
    {
        $response = $this->get('/Dependency');
        $response->assertStatus(200);
        $response->assertViewIs('display-dependency');
        $response->assertSee('Class Dependencies');
    }

    public function test_GetDependencyByClassIntegration()
    {
        $data =[
            'className' => 'usercontroller'
        ];

        $response = $this->post('/searchDependencyByClass',$data);
        $response->assertStatus(200);
        $response->assertViewIs('display-dependency');
        $response->assertSee('usercontroller');
    }

    public function test_MetricIntegration()
    {
        $response = $this->get('/Metric');
        $response->assertStatus(200);
        $response->assertViewIs('display-metric');
        $response->assertSee('Metrics');
    }

    public function test_GenerateGraphIntegration()
    {
        $response = $this->get('/generateGraph');
        $response->assertStatus(200);
        $response->assertViewIs('generate-graph');
        $response->assertSee('Process To Generate A Ontology Graph');
    }
}
