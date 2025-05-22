@extends('layouts.app')

@section('title', 'Оценки ученика')

@section('content')

    {{ app()->getLocale() }}
    <h2>{{ __('grades.title') }}</h2>
    <table>
        <thead>
        <tr>
            <th>Предмет</th>
            <th>Оценка</th>
        </tr>
        </thead>
        <tbody>
        @foreach($grades as $item)
            <tr>
                <td>{{ $item['subject'] }}</td>
                <td>{{ $item['grade'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
