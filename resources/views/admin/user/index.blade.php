@extends('layouts.admin')

@section('content')

    <div class="header-wrapper">
        <h1>Список пользователей</h1>
        <a href="/admin/users/create">
            Создать пользователя
        </a>
    </div>

    <div class="data-table">
        <div class="row">
            <div class="col">
                <strong>Имя</strong>
            </div>
            <div class="col">
                <strong>Роль</strong>
            </div>
            <div class="col">
                <strong>Район</strong>
            </div>
            <div class="col">
                <strong>Действие</strong>
            </div>
        </div>
        @foreach($users as $user)
            <div class="row">
                <div class="col">
                    {{ $user->name }}
                </div>
                <div class="col">
                    {{ $user->role ? $user->role->code : ''}}
                </div>
                <div class="col">
                    {{ $user->district ? $user->district->title : ''}}
                </div>
                <div class="col">
                    <div class="action-buttons">
                        <a target="_blank" href="/admin/users/{{ $user->id }}/edit" class="button">
                            <img src="{{ asset('/media/img/pencil.svg')  }}" alt="">
                            {{--Редактировать--}}
                        </a>

                        <form action="/admin/users/{{ $user->id }}" method="POST" class="button">
                            @csrf
                            @method('DELETE')

                            <button class="button small-button">
                                <img src="{{ asset('/media/img/trash.svg')  }}" alt="">
                                {{--Удалить--}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
