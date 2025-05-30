<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    @yield('styles')

    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
        }

        .sidebar {
            width: 240px;
            background: linear-gradient(to right, rgb(43, 7, 81), rgb(10, 31, 67));
            color: white;
            position: fixed;
            height: 100%;
            top: 0;
            left: 0;
            padding: 1.5rem;
        }

        .main-content {
            margin-left: 240px;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding: 2rem;
            background-color: #f8f9fa;
        }

        .content-wrapper {
            flex: 1;
        }

        .sidebar a, .sidebar button {
            display: block;
            text-align: left;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            color: white;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .sidebar a:hover, .sidebar button:hover {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
        }

        footer {
            text-align: center;
            color: #6c757d;
            font-size: 0.875rem;
            padding-top: 1rem;
            border-top: 1px solid #dee2e6;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    @auth
        @include('partials.sidebar')
    @endauth

    <div class="main-content">
        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer>
            &copy; {{ date('Y') }} Sistem Inventaris • XI PPLG 2 
        </footer>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
