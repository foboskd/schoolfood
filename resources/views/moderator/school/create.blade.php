@extends('layouts.moderator')

@section('content')

    <header>
        <h1>Создание школы</h1>

        <a href="/moderator/schools/" class="button">
            Назад
        </a>
    </header>

    <br/><br/>

    <form action="/moderator/schools" method="POST" class="create-form">
        @csrf

        <input type="text" name="title" placeholder="Название*" required>

        <input type="text" name="address" placeholder="Адрес*" required>

        <input type="text" name="latitude" placeholder="Широта">

        <input type="text" name="longitude" placeholder="Долгота">

        <input type="submit" value="Создать" class="button">
    </form>
@endsection