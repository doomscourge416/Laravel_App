<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создать пользователя</title>
</head>
<body>
    <h1>Создать пользователя</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('user.create') }}">
        @csrf
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
