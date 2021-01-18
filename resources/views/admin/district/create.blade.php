@extends('layouts.admin')

@section('content')

    <header>
        <h1>Создание района</h1>

        <a href="/admin/districts/" class="button">
            Назад
        </a>
    </header>

    <br/><br/>

    <form action="/admin/districts" method="POST" class="create-form">
        @csrf

        <input type="text" name="title" placeholder="Название" required>

        <input type="submit" value="Создать" class="button">
    </form>
@endsection