<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}" media="screen,projection">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>
    <header>
        <nav class="z-depth-0 black nav">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo center">Museu do Vinil</a>
                <a href="#" data-target="menu-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Login</a></li>
                </ul>
                <ul class="left hide-on-med-and-down">
                    <li><a href="/post/create">Criar post</a></li>
                    <li><a href="badges.html">Museu</a></li>

                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="menu-mobile">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    </header>

    @yield('content')

    <footer>
        <p>Hally &copy; 2021</p>
    </footer>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });

        $(document).ready(function() {
            $('.slider').slider();
        });
    </script>
</body>

</html>