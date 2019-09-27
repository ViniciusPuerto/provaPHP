<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        @section('navbar')
            <nav>
                <div class="nav-wrapper">
                    <a href="" class="brand-logo">Prova</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="http://localhost:80/cities">Cities</a></li>
                        <li><a href="http://localhost:80/groups">Groups</a></li>
                        <li><a href="logout">Logout</a></li>
                    </ul>
                </div>
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
