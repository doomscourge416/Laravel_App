@extends('layouts.app')

@section('title', 'Оценки ученика')

@section('content')
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
