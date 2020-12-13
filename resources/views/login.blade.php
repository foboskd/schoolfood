<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мониторинг питания</title>
    {{--    <link rel="stylesheet" href="{{ asset('css/main.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}"/>
</head>
<body class="login-body">
<div class="login-form-wrapper">
    <form class="login-form" action="/login" method="POST">
        @csrf

        <h2>Авторизация</h2>
        <input type="text" name="name" placeholder="Имя">
        <input type="password" name="password" placeholder="Пароль">

        <input type="submit" value="Войти">
    </form>
</div>
</body>
</html>
