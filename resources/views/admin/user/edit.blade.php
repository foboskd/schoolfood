@extends('layouts.admin')

@section('content')

    <header>
        <h1>Редактирование пользователя {{ $user->name }}</h1>

        <a href="/admin/users/" class="button">
            Назад
        </a>
    </header>

    <br/><br/>

    <form action="/admin/users/{{ $user->id }}" method="POST" class="create-form">
        @csrf
        @method('PUT')

        <input type="text" name="name" placeholder="Имя" required value="{{ $user->name }}">

        <select name="role_id">
            @foreach($roles as $role)
                <option value="{{ $role->id }}" @if($user->role_id === $role->id) selected @endif>
                    {{ $role->code  }}
                </option>
            @endforeach
        </select>

        <select name="district_id">
            <option>

            </option>
            @foreach($districts as $district)
                <option value="{{ $district->id }}" @if($user->district_id === $district->id) selected @endif>
                    {{ $district->title }}
                </option>
            @endforeach
        </select>

        <input type="submit" value="Сохранить" class="button">
    </form>
@endsection