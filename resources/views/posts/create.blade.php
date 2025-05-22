@extends('layouts.app')

@section('title', 'Создать пост')

@section('content')
    <h1>Создать новый пост</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="title">Заголовок:</label>
        <input type="text" name="title" required><br><br>

        <label for="content">Содержание:</label><br>
        <textarea name="content" required></textarea><br><br>

        <button type="submit">Сохранить</button>
    </form>
@endsection
