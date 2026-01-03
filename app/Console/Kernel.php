<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     */
    protected $commands = [
        \App\Console\Commands\GenerateSitemap::class,
    ];

    /**
     * Define the application's command schedule.
     */
protected function schedule(Schedule $schedule): void
{
    $schedule->call(function () {
    DB::table('notifications')
        ->where('created_at', '<', now()->subDays(30))
        ->delete();
})->daily();
    // Run sitemap:generate daily at midnight
    $schedule->command('sitemap:generate')->daily();
    
}

/**
 * Register the commands for the application.
 */
protected function commands(): void
{
    $this->load(__DIR__ . '/Commands');

    require base_path('routes/console.php');
}

}
