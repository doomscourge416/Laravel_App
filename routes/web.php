<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;


// 1. Главная страница
Route::get('/', [ExampleController::class, 'index']);

// 2. Роут для отправки задачи в очередь
Route::get('/dispatch', [ExampleController::class, 'dispatchJob']);

// 3.Роут для создания Юзеров
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store']);

// 4. Страница Контактов
Route::get('/news/{id}', function ($id){
    return 'Контакты: +7 (999) 123-45-67';
});

// 5. Новость по ID
Route::get('/news/{id}', function ($id) {
    return "Просмотр новости с ID: $id";
});

// 6. Поиск пользователя по имени
Route::get('/users/{name}/profile', function ($name) {
    return "Профиль пользователя: $name";
});

// 7. Каталог товаров по категории
Route::get('/catalog/{category}/{id}', function ($category, $id) {
    return "Категория: $category, ID товара: $id";
});
