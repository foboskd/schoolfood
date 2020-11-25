@extends('layouts.admin')

@section('content')
    <h1>Создание школы</h1>

    <a href="/admin/schools/">
        Назад
    </a>

    <br/><br/>

    <form action="/admin/schools" method="POST">
        @csrf

        <input type="text" name="title" placeholder="Название">
        <input type="text" name="address" placeholder="Адрес">

        <input type="submit" value="Создать">
    </form>
@endsection