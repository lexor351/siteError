<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/main">Главная</a></li>
                <li><a href="/docs">Документация</a></li>
                <li><a href="/contact">Контакты</a></li>
                <li><a href="#zabbix">Zabbix</a></li>
            </ul>
        </nav>
            <div>{{ Auth::user()->name }}</div>
        </div>
    </header>
</body>

<div class="contaner">

@yield('main')

</div>

</html>