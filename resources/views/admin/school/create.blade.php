@extends('layouts.admin')

@section('content')

    <header>
        <h1>Создание школы</h1>

        <a href="/admin/schools/" class="button">
            Назад
        </a>
    </header>

    <br/><br/>

    <form action="/admin/schools" method="POST" class="create-form">
        @csrf

        <input type="text" name="title" placeholder="Название">
        <input type="text" name="address" placeholder="Адрес">

        <input type="submit" value="Создать" class="button">
    </form>
@endsection