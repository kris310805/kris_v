@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <h1>Наши контакты</h1>
    
    <div class="contact-info">
        <h2>Основная информация:</h2>
        <p>Email: {{ $contacts['email'] ?? 'Не указан' }}</p>
        <p>Телефон: {{ $contacts['phone'] ?? 'Не указан' }}</p>
        <p>Адрес: {{ $contacts['address'] ?? 'Не указан' }}</p>

        @isset($contacts['socials'])
            <h2>Социальные сети:</h2>
            <ul>
                @foreach($contacts['socials'] as $name => $url)
                    <li><a href="{{ $url }}" target="_blank">{{ $name }}</a></li>
                @endforeach
            </ul>
        @else
            <p class="text-warning">Информация о социальных сетях отсутствует</p>
        @endisset
        
        <h2>Студент:</h2>
        <p>Васькина Кристина Витальевна</p>
        <p>Группа: 231-321</p>
    </div>
@endsection
