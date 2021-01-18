@extends('layouts.admin')

@section('content')

    <div class="header-wrapper">
        <h1>Список районов</h1>
        <a href="/admin/districts/create">
            Создать район
        </a>
    </div>

    <div class="data-table">
        <div class="row">
            <div class="col">
                <strong>Название</strong>
            </div>
            <div class="col">
                <strong>Действие</strong>
            </div>
        </div>
        @foreach($districts as $district)
            <div class="row">
                <div class="col">
                    {{ $district->title }}
                </div>
                <div class="col">
                    <a target="_blank" href="/admin/districts/{{ $district->id }}/edit" class="button small-button">
                        <img src="{{ asset('/media/img/pencil.svg')  }}" alt="">
                        Редактировать
                    </a>
                    <form action="/admin/districts/{{ $district->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="button small-button">
                            <img src="{{ asset('/media/img/trash.svg')  }}" alt="">
                            Удалить
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection
