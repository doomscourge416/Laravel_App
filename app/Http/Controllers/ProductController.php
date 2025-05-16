<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Показывает список всех товаров.
     */
    public function index()
    {
        return 'Список товаров';
    }

    /**
     * Отображает форму добавления товара.
     */
    public function create()
    {
        return 'Форма добавления товара';
    }

    /**
     * Сохраняет новый товар.
     */
    public function store(Request $request)
    {
        return 'Товар успешно добавлен!';
    }

    /**
     * Показывает один товар по ID.
     */
    public function show($id)
    {
        return "Просмотр товара #{$id}";
    }

    /**
     * Отображает форму редактирования товара.
     */
    public function edit($id)
    {
        return "Форма редактирования товара #{$id}";
    }

    /**
     * Обновляет товар.
     */
    public function update(Request $request, $id)
    {
        return "Товар #{$id} обновлён";
    }

    /**
     * Удаляет товар.
     */
    public function destroy($id)
    {
        return "Товар #{$id} удалён";
    }
}
