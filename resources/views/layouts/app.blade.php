<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css" />

    <title>Financial Literacy | Welcome</title>
    
    @section('css')
    <style>
        .navbar-tp {
            background-image: linear-gradient(to right, #380d62, #10054a);
        }
        
    </style>
    @show
</head>
<body>
    <div id="app" class="navbar-tp">
        <nav class="navbar navbar-expand-md py-3">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo.png" alt="" />
                    <span class="fw-medium p-3 text-light">Financial Literacy</span>
                </a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
					<div id="navbarNav" class="collapse navbar-collapse">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a href="{{ url('/about') }}" class="nav-link text-light">About</a>
							</li>
							<li class="nav-item">
								<a href="{{ url('/steps') }}" class="nav-link text-light">7 Steps</a>
							</li>
						</ul>
					</div>
            </div>
        </nav>
    </div>

    <main class="py">
        @yield('body')
    </main>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
