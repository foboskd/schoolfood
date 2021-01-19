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
            <div class="col">
                <strong>Количество голосов</strong>
            </div>
            <div class="col">
                <strong>Сумма</strong>
            </div>
            <div class="col">
                <strong>Действие</strong>
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
                <div class="col">
                    {{ count($school->reviews) }}
                </div>
                <div class="col">
                    {{ $school->reviewsSum() }}
                </div>
                <div class="col">
                    <a target="_blank" href="/moderator/schools/{{ $school->uuid }}/reviews" class="button small-button">
                        <img src="{{ asset('/media/img/expand.svg')  }}" alt="">
                        Отзывы
                    </a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
