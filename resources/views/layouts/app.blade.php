<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Unlocked!')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: #f8fafc;
        }

        .navbar-brand {
            color: #FF2D20 !important;
            font-weight: 700;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        .btn-laravel {
            background: #FF2D20;
            border: none;
            color: white;
        }

        .btn-laravel:hover {
            background: #e42618;
            color: white;
        }

        .table th {
            background: #f1f5f9;
        }
    </style>

    @stack('styles')
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                Laravel Unlocked!
            </a>

            <ul class="navbar-nav ms-4">
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('students.index')) fw-semibold @endif"
                       href="{{ route('students.index') }}">
                        Students
                    </a>
                </li>
            </ul>

            <div class="ms-auto">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        @yield('content')
    </div>

</body>

</html>
