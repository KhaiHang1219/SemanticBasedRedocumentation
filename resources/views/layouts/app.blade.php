<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Semantic Based Redocumentation Tools</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Semantic Based Redocumentation Tools
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Retrieve Data</a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{url('/downloadMetricFiles')}}">DownloadMetric</a></li>
                                <li><a class="nav-link" href="{{url('/downloadVariableFiles')}}">DownloadVariable</a></li>
                                <li><a class="nav-link" href="{{url('/downloadMethodFiles')}}">DownloadMethod</a></li>
                                <li><a class="nav-link" href="{{url('/downloadDependencyFiles')}}">DownloadDependency</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Display Data</a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{url('/Metric')}}">DisplayMetric</a></li>
                                <li><a class="nav-link" href="{{url('/Variable')}}">DisplayVariable</a></li>
                                <li><a class="nav-link" href="{{url('/Method')}}">DisplayMethod</a></li>
                                <li><a class="nav-link" href="{{url('/Dependency')}}">DisplayDependency</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Transform Ontology & Graph</a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{url('/generateGraph')}}">Generate Graph</a></li>
                                <!-- <li><a class="nav-link" href="https://service.tib.eu/webvowl/" target=”_blank” >Generate Graph</a></li> -->
                                <li><a class="nav-link" href="http://127.0.0.1:5000/DependenciesOntology">Depenency Ontology</a></li>
                                <li><a class="nav-link" href="http://127.0.0.1:5000/MethodOntology">Method Ontology</a></li>
                                <li><a class="nav-link" href="http://127.0.0.1:5000/VariableOntology">Variable Ontology</a></li>
                                <li><a class="nav-link" href="http://127.0.0.1:5000/CompleteOntology">Complete Ontology</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{url('/downloadMethodFiles')}}">DownloadMethod</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/downloadVariableFiles')}}">DownloadVariable</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/Variable')}}">DisplayVariable</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/Method')}}">DisplayMethod</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://service.tib.eu/webvowl/" target=”_blank”>WebVOWL</a>
                        </li> -->
                        <!-- Authentication Links
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
