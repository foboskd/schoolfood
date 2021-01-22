@extends('layouts.admin')

@section('content')

    <header>
        <div>
            <h1>
                {{ $school->title }}
            </h1>
            <h2>
                Всего проголосовало : {{ count($school->reviews) }}
            </h2>
            <h2>
                Сумма : {{ $school->reviewsSum() }}
            </h2>
        </div>

        <div class="links-wrapper">
            <a href="/admin/schools/" class="button">
                Назад
            </a>
            <a href="/review/{{ $school->uuid }}" class="button">
                Ссылка на школу
            </a>
        </div>
    </header>


    <div class="data-table">
        <div class="review-row">
            <div class="col">
                <strong>Дата</strong>
            </div>
            <div class="col">
                <strong>Время</strong>
            </div>
            <div class="col text-col">
                <strong>Текст</strong>
            </div>
            <div class="col">
                <strong>Отзыв</strong>
            </div>
            <div class="col">
                <strong>Файл</strong>
            </div>
            <div class="col">
                Действие
            </div>
        </div>
        @foreach($school->reviews as $review)
            <div class="review-row">
                <div class="col">
                    {{ $review->created_at['date']}}
                </div>
                <div class="col">
                    {{ $review->created_at['time']}}
                </div>
                <div class="col text-col">
                    {{ $review->text }}
                </div>
                <div class="col {{ $review->score === -1 ? 'negative' : 'positive' }}-color">
                    {{ $review->score === -1 ? 'Отрицательно' : 'Положительно' }}
                </div>
                <div class="col">
                    {{ $review->file  }}
                    @if($review->file)
                        <img src="/storage/files/{{ $review->file }}" alt="">
                    @endif
                </div>
                <div class="col">
                    <form action="/admin/reviews/{{ $review->uuid }}" method="POST" class="button small-button">
                        @csrf
                        @method('DELETE')

                        <button class="button">
                            <img src="{{ asset('/media/img/trash.svg')  }}" alt="">
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection