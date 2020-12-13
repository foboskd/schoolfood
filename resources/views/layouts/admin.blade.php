<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Мониторинг питания</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}"/>
</head>
<body>

<div class="container">
    <form class="profile-wrapper" action="/logout" method="POST">
        @csrf

        <label>Администратор</label>
        <input type="submit" value="Выйти" id="logout-button">
    </form>

    @yield('content')
</div>

</body>
</html>
