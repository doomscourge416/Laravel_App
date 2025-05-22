@extends('layouts.app')

@section('title', 'Редактировать пост')

@section('content')
    <h1>Редактировать пост</h1>
    <form method="POST" action="{{ route('posts.update', $post['id']) }}">
        @method('PUT')
        @csrf
        <label for="title">Заголовок:</label>
        <input type="text" name="title" value="{{ $post['title'] }}" required><br><br>

        <label for="content">Содержание:</label><br>
        <textarea name="content" required>{{ $post['content'] }}</textarea><br><br>

        <button type="submit">Обновить</button>
    </form>
@endsection
