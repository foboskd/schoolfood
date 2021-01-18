@extends('layouts.moderator')

@section('content')

    <div class="header-wrapper">
        <h1>Список школ</h1>
        <a href="/moderator/schools/create">
            Создать школу
        </a>
    </div>

    <div class="data-table">
        <div class="row">
            <div class="col">
                <strong>Название</strong>
            </div>
            <div class="col">
                <strong>Адрес</strong>
            </div>
        </div>
        @foreach($schools as $school)
            <div class="row">
                <div class="col">
                    {{ $school->title }}
                </div>
                <div class="col">
                    {{ $school->address }}
                </div>
            </div>
        @endforeach
    </div>

@endsection
