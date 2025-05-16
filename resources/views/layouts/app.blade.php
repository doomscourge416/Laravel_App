<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Школьные оценки')</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }

        /* Стили меню */
        .menu {
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }
        .menu li {
            display: inline-block;
            margin-right: 10px;
        }
        .menu a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>

<h1>📚 Мои оценки</h1>
<header>
    <x-menu :items="[
        ['title' => 'Главная', 'url' => '/'],
        ['title' => 'Оценки', 'url' => '/grades'],
        ['title' => 'Продукты', 'url' => '/products'],
    ]" />
</header>

@yield('content')

<footer>
    @include('components.menu', [
        'items' => [
            ['title' => 'Контакты', 'url' => '/contacts'],
            ['title' => 'Новости', 'url' => '/news'],
        ]
    ])
</footer>

</body>
</html>
