<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ProcessPodcast;

class RunPodcastJob extends Command
{
    // Это подпись команды: php artisan job:run-podcast
    protected $signature = 'job:run-podcast';

    // Описание команды
    protected $description = 'Запускает задачу ProcessPodcast';

    public function __construct()
    {
        parent::__construct();
    }

    // Что выполняется при вызове команды
    public function handle(): void
    {
        ProcessPodcast::dispatch();
        $this->info('Задача ProcessPodcast отправлена в очередь');
    }
}
