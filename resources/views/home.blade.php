@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <h1>Последние статьи</h1>
    
    <table class="articles-table">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Название</th>
                <th>Превью 1</th>
                <th>Превью 2</th>
                <th>Описание</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article['date'] ?? 'Нет даты' }}</td>
                <td>{{ $article['name'] ?? 'Без названия' }}</td>
                <td>
                    <a href="/gallery/{{ $article['full_image'] ?? 'full.jpeg' }}">
                        <img src="{{ asset('files/'.$article['preview_image']) }}" alt="Превью 1">
                    </a>
                </td>
                <td>
                    <a href="/gallery/{{ $article['full_image2'] ?? 'full_2.jpeg' }}">
                        <img src="{{ asset('files/'.$article['preview_image2']) }}" alt="Превью 2">
                    </a>
                </td>
                <td>{{ $article['shortDesc'] ?? substr($article['desc'] ?? '', 0, 100) }}...</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
