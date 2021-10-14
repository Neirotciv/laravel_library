<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <title>@yield("title")</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Welcome</a>
                <a class="navbar-brand" href="/library">Librairie</a>
                <a class="navbar-brand" href="/market">Market</a>
                <a class="navbar-brand" href="/contact">Contact</a>
            </div>
        </nav>
    </div>  

    <div class="container wrapper">
        @yield("wrapper")
    </div>

    <!-- <footer>
        <h3>Footer</h3>
    </footer> -->
    <script src="{{ asset('js/bootstrap.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>