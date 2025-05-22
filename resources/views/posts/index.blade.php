@extends('layouts.app')

@section('title', 'Все посты')

@section('content')
    <h1>Все посты</h1>

    <a href="{{ route('posts.create') }}">Добавить пост</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post['id']) }}">{{ $post['title'] }}</a>
                |
                <a href="{{ route('posts.edit', $post['id']) }}">Редактировать</a>
            </li>
        @endforeach
    </ul>
@endsection
