@extends('layouts.app')

@section('title', 'Галерея')

@section('content')
    <div class="gallery">
        <h1>Полное изображение</h1>
        <img src="{{ asset($image) }}" alt="Изображение">
        <a href="/">Вернуться на главную</a>
    </div>
@endsection
