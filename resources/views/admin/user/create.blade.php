@extends('layouts.admin')

@section('content')

    <header>
        <h1>Создание пользователя</h1>

        <a href="/admin/users/" class="button">
            Назад
        </a>
    </header>

    <br/><br/>

    {{ $errors }}

    <form action="/admin/users" method="POST" class="create-form">
        @csrf

        <input type="text" name="name" placeholder="Имя" required>

        <input type="password" name="password" placeholder="Пароль" required>

        <select name="role_id">
            @foreach($roles as $role)
                <option value="{{ $role->id }}">
                    {{ $role->code  }}
                </option>
            @endforeach
        </select>

        <select name="district_id">
            <option>

            </option>
            @foreach($districts as $district)
                <option value="{{ $district->id }}">
                    {{ $district->title }}
                </option>
            @endforeach
        </select>

        <input type="submit" value="Создать" class="button">
    </form>
@endsection