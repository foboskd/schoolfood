@extends('layouts.admin')

@section('content')

    <header>
        <h1>Редактирование района {{ $district->title }}</h1>

        <a href="/admin/districts/" class="button">
            Назад
        </a>
    </header>

    <br/><br/>

    <form action="/admin/districts/{{ $district->id }}" method="POST" class="create-form">
        @csrf
        @method('PUT')

        <input type="text" name="title" placeholder="Название" value="{{ $district->title }}" required>

        <input type="submit" value="Сохранить" class="button">
    </form>
@endsection