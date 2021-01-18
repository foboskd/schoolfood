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
        <div class="block">
            <a href="/admin/schools" class="link">
                Школы
            </a>

            <a href="/admin/districts" class="link">
                Районы
            </a>

            <a href="/admin/users" class="link">
                Пользователи
            </a>
        </div>

        <div class="block">
            <label>Администратор</label>
            <input type="submit" value="Выйти" id="logout-button">
        </div>
    </form>

    @yield('content')
</div>

</body>
</html>
