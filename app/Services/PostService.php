<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class PostService
{
    public function getAll()
    {
        return Session::get('posts', []);
    }

    public function find($id)
    {
        $posts = $this->getAll();
        return $posts[$id] ?? null;
    }

    public function create(array $data)
    {
        $posts = $this->getAll();
        $id = count($posts) ? max(array_keys($posts)) + 1 : 1;

        $posts[$id] = array_merge(['id' => $id], $data);
        Session::put('posts', $posts);

        return $posts[$id];
    }

    public function update($id, array $data)
    {
        $posts = $this->getAll();

        if (!isset($posts[$id])) {
            return false;
        }

        $posts[$id] = array_merge($posts[$id], $data);
        Session::put('posts', $posts);

        return $posts[$id];
    }

    public function delete($id)
    {
        $posts = $this->getAll();

        if (isset($posts[$id])) {
            unset($posts[$id]);
            Session::put('posts', $posts);
            return true;
        }

        return false;
    }
}
