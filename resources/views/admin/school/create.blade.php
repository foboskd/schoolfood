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

        <input type="text" name="title" placeholder="Название*" required>

        <input type="text" name="address" placeholder="Адрес*" required>

        <select name="district_id">
            <option>

            </option>
            @foreach($districts as $district)
                <option value="{{ $district->id }}">
                    {{ $district->title }}
                </option>
            @endforeach
        </select>

        <input type="text" name="latitude" placeholder="Широта" required>

        <input type="text" name="longitude" placeholder="Долгота" required>

        <input type="submit" value="Создать" class="button">
    </form>
@endsection