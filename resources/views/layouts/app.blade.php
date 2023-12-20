<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">


    <style>
        .ongkir-header {
            padding: 3rem 1.5rem;
            text-align: center;
        }

        h1 {
            color: #BEB3A6;
            font-weight: 500;
            line-height: 1.2;
        }

        p {
            color: #BEB3A6;
        }

        .custom-row {
            margin-bottom: 20px;

        
        }
    </style>
</head>
<body>
    <main class="vstack gap-1">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/ongkir.js"></script>
    <script src="{{ asset('js/select2.min.js') }}" defer></script>

</body>
</html>
