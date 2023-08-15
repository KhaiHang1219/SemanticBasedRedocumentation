<!DOCTYPE html>
<html>
<head>
    <title>Semantic Based Redocumentation Tools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
   
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Process To Generate A Ontology Graph
        </div>
        <div class="card-body">
            <div class="steps">
                <div class="step">
                    <h2>Step 1: Download The Ontology File</h2>
                    <p>Click on the Transform Ontology & Graph button locate in right top corner.</p>
                    <div style="display:flex; align-item:center; justify-content:center">
                        <img src="{{ asset('images/step1.png')}}" ></img>
                    </div>
                    <p style="font-size: 20px;">Select the Ontology Type You Wish To Generate Graph</p>
                </div>
                <div class="step">
                    <h2>Step 2: Click On The Link Below</h2>
                    <p><a href="https://service.tib.eu/webvowl/" target=”_blank” >Generate Graph</a></p>
                    <div style="display:flex; align-item:center; justify-content:center">
                        <img src="{{ asset('images/step2.png')}}" ></img>
                    </div>
                    <p style="font-size: 20px;">Import the downloaded file into the tools</p>
                </div>
                <div class="step">
                    <h2>Step 3: The Graph Will Be Generated</h2>
                    <div style="display:flex; align-item:center; justify-content:center">
                    <img src="{{ asset('images/step3.png')}}"  width="1000" height="500"></img>
                    </div>
                    <p style="font-size: 20px;">Now you are able to view the depdency graph based on the type of ontology select in step 1</p>
                </div>
                <div class="step">
                    <h2>Step 4: Search Through The Graph</h2>
                    <div style="display:flex; align-item:center; justify-content:center">
                        <img src="{{ asset('images/step4.png')}}" ></img>
                    </div>
                    <p style="font-size: 20px;">You are able to search the node by the keyword input and click on the yellow button which will locate the highlighted node</p>
                </div>
            <div>
        </div>
    </div>
 
</div>
@endsection
   
</body>
</html>