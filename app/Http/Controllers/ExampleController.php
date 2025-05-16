<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExampleService;

class ExampleController extends Controller
{
    protected $service;

    public function __construct(ExampleService $service)
    {
        $this->service = $service;
    }

    // Выводит сообщение из сервиса
    public function index()
    {
        return $this->service->getMessage();
    }

    // Отправляет задачу в очередь
    public function dispatchJob()
    {
        \App\Jobs\ProcessPodcast::dispatch();

        return 'Задача отправлена в очередь!';
    }
}
