@extends('layouts.admin')

@section('content')
    <form action="/admin/schools" method="POST">
        @csrf

        <input type="text" name="title" placeholder="Название">
        <input type="text" name="address" placeholder="Адрес">

        <input type="submit" value="Создать">
    </form>
@endsection