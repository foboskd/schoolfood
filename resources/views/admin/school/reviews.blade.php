@extends('layouts.admin')

@section('content')
    <h1>
        {{ $school->title }}
    </h1>
    <h2>
        Сумма : {{ $school->reviewsSum() }}
    </h2>

    <a href="/admin/schools/">
        Назад
    </a>


    <div class="data-table">
        <div class="row">
            <div class="col">
                <strong>Текст</strong>
            </div>
            <div class="col">
                <strong>Отзыв</strong>
            </div>
            <div class="col">
                <strong>Файл</strong>
            </div>
        </div>
        @foreach($school->reviews as $review)
            <div class="row">
                <div class="col">
                    {{ $review->text }}
                </div>
                <div class="col">
                    {{ $review->score === -1 ? 'Отрицательно' : 'Положительно' }}
                </div>
                <div class="col">
                    @if($review->file)
                        <img src="/storage/files/{{ $review->file }}" alt="">
                    @endif
                </div>
            </div>
        @endforeach
    </div>

@endsection