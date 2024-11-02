<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Back Office')</title>
    @vite(['resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body>
    <div class="backoffice-wrapper">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.projects.index') }}">Progetti</a></li>
                    
                </ul>
            </nav>
        </div>
        <div class="content">
            <header>
                <h1>@yield('page-title', 'Back Office')</h1>
            </header>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
