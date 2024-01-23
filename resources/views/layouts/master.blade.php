<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ url('blade-test') }}">Home</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
            <li><a href="{{ url('about') }}">About</a></li>

        </ul>
    </nav>


    @yield('content')


    <footer>
        <h2>Footer</h2>
    </footer>
</body>

</html>
