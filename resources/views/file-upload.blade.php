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
        <div class = "card-header">
            Upload Your JAVA File Here
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <b>{{ $message }}</b>
                </div>
            @endif
            @if($message = Session::get('failed'))
                <div class="alert alert-danger">
                    <b>{{ $message }}</b>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
            <form class="row" method="post" action="{{url('multiple-file-upload')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-auto">
                    <input type="file" name="fileuploads[]" class=" form-control" multiple accept=".java">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary mb-3">Upload Files</button>
                </div>
            </form>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Filename</th>
                        <th>Filepath</th>
                        <th>File Type</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($fileUploads as $fileUpload)
                    <tr>
                        <td>{{ $fileUpload->filename }}</td>
                        <td><a href="http://localhost:8000{{ $fileUpload->filepath }}" target="_blank" rel="noopener noreferrer">{{ $fileUpload->filepath }}</a></td>
                        <td>{{ $fileUpload->type }}</td>
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