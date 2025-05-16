<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Показывает список всех постов.
     */
    public function index()
    {
        return 'Список всех постов';
    }

    /**
     * Отображает форму создания нового поста.
     */
    public function create()
    {
        return 'Форма добавления нового поста';
    }

    /**
     * Сохраняет новый пост.
     */
    public function store(Request $request)
    {
        return 'Пост успешно сохранён!';
    }

    /**
     * Показывает один пост по ID.
     */
    public function show($id)
    {
        return "Просмотр поста #{$id}";
    }

    /**
     * Отображает форму редактирования поста.
     */
    public function edit($id)
    {
        return "Форма редактирования поста #{$id}";
    }

    /**
     * Обновляет пост.
     */
    public function update(Request $request, $id)
    {
        return "Пост #{$id} обновлён";
    }

    /**
     * Удаляет пост.
     */
    public function destroy($id)
    {
        return "Пост #{$id} удалён";
    }
}
