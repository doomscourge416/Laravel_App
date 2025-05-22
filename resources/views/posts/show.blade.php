@extends('layouts.app')

@section('title', 'Просмотр поста')

@section('content')
    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>
    <a href="{{ route('posts.edit', $post['id']) }}">Редактировать</a>
@endsection
