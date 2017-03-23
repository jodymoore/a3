<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'xkcd Password Generator')
    </title>

    <meta charset='utf-8'>
    <link href="/css/styles.css" type='text/css' rel='stylesheet'>

    @stack('head')

</head>
<body>
    <div id="container">
        <div id="inner">
        <header>

        </header>

        <section>
            @yield('content')
        </section>

        <footer>
        &copy; {{ date('Y') }}
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        @stack('body')
    </div>
</div>
</body>
</html>