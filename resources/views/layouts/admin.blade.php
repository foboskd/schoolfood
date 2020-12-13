<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
</head>
<body>

<div class="container">
    <form class="profile-wrapper" action="/logout" method="POST">
        @csrf

        <label>Администратор</label><input type="submit" value="Выйти">
    </form>

    @yield('content')
</div>

</body>
</html>
