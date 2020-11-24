@extends('layouts.admin')

@section('content')

    {{ $errors }}

    <form action="/api/schools/2d81a41a-06a6-4acd-9ed2-f959bebfc3a6/review" method="POST" enctype="multipart/form-data">
        @csrf

        <textarea name="text">

        </textarea>

        <input type="file" name="file" placeholder="Файл">

        <input type="text" name="fingerprint" placeholder="Фингерпринт">

        <input type="number" name="score" placeholder="Балл">

        <input type="submit" value="Создать">
    </form>
@endsection