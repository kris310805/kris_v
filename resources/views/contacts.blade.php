@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <h1>Наши контакты</h1>
    
    <div class="contact-info">
        <h2>Основная информация:</h2>
        <p>Email: {{ $contacts['email'] }}</p>
        <p>Телефон: {{ $contacts['phone'] }}</p>
        <p>Адрес: {{ $contacts['address'] }}</p>
        
        <h2>Социальные сети:</h2>
        <ul>
            @foreach($contacts['socials'] as $name => $url)
                <li><a href="{{ $url }}" target="_blank">{{ $name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
