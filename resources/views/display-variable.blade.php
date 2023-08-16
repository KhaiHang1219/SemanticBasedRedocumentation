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
            Class Variable
        </div>
        <div class="card-body">
            <form class="row" method="post" action="{{url('searchVariableByClass')}}">
                @csrf
                <div class="col-auto">
                    <input type="search" class=" form-control" placeholder="Search Variable By Class" name="className">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary mb-3">Search</button>
                </div>
            </form>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>HasVariable</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Variables as $variable)
                    <tr>
                        <td>{{ $variable['Class'] }}</td>
                        <td>{{ $variable['Variable'] }}</td>
                    </tr>
                @endforeach
                </tbody>
                     
            </table>
        </div>
    </div>
 
</div>
@endsection
   
</body>
</html>