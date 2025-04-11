<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Laravel Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            html, body {
                height: 100%;
                margin: 0;
                display: flex;
                flex-direction: column;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
            }
            .navbar {
                background-color: #007bff;
            }
            .navbar-brand, .nav-link {
                color: #007bff !important;
            }
            .navbar-brand:hover, .nav-link:hover {
                color: #010bff !important;
            }
            .container {
                flex-grow: 1;
                margin-top: 30px;
            }
            h1 {
                font-size: 2.5rem;
                font-weight: bold;
                color: #333;
            }
            .content-card {
                background-color: white;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .footer {
                background-color: #007bff;
                color: white;
                padding: 20px;
                text-align: center;
                margin-top: 30px;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">PHP Laravel Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="{{ route('about') }}" class="nav-link">О блоге</a>
                        <a href="{{ route('articles.index') }}" class="nav-link">Статьи</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <h1>@yield('header')</h1>

            <div class="content-card">
                @yield('content')
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2025 PHP Laravel Blog. Все права защищены.</p>
        </div>

    </body>
</html>
