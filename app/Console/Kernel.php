<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use NjoguAmos\Jenga\Models\JengaToken;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command(command: 'jenga:auth')->everyFiveMinutes();
        $schedule->command(command: 'model:prune', parameters: [
            '--model' => [JengaToken::class],
        ])->everyThirtyMinutes();
    }

    protected function commands(): void
    {
        $this->load(paths: __DIR__.'/Commands');

        require base_path(path: 'routes/console.php');
    }
}
