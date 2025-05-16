<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\GradeController;




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

// Ресурсный маршрут постов (только 3 метода)
// Route::resource('posts', PostController::class)->only(['index', 'show', 'edit']);

// Ресурсный маршрут для всех методов постов
Route::resource('posts', PostController::class);

// Ресурсный маршрут продуктов (только 3 метода)
// Route::resource('products', ProductController::class)->only(['index', 'show', 'edit']);

// Ресурсный маршрут для всех методов продуктов
Route::resource('products', ProductController::class);

// Ресурсные маршруты SimpleController-а
Route::get('/hello/{name}', [SimpleController::class, 'greet']);
Route::get('/math/{a}/{b}', [SimpleController::class, 'multiply']);
Route::get('/item/{id}/{action?}', [SimpleController::class, 'info']);


Route::get('/grades', [GradeController::class, 'index'])->name('grades.index');
