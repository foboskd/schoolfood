@extends('layouts.admin')

@section('content')

    <header>
        <h1>Редактирование школы {{ $school->title }}</h1>

        <a href="/admin/schools/" class="button">
            Назад
        </a>
    </header>

    <br/><br/>

    <form action="/admin/schools/{{ $school->uuid }}" method="POST" class="create-form">
        @csrf
        @method('PUT')

        <input type="text" name="title" placeholder="Название*" required value="{{ $school->title }}">

        <input type="text" name="address" placeholder="Адрес*" required value="{{ $school->address }}">

        <select name="district_id">
            <option>

            </option>
            @foreach($districts as $district)
                <option value="{{ $district->id }}" @if($school->district_id === $district->id) selected @endif>
                    {{ $district->title }}
                </option>
            @endforeach
        </select>

        <input type="text" name="latitude" placeholder="Широта" required value="{{ $school->latitude }}">

        <input type="text" name="longitude" placeholder="Долгота" required value="{{ $school->longitude }}">

        <input type="submit" value="Создать" class="button">
    </form>
@endsection