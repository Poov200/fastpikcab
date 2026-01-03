<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DeleteOldNotifications extends Command
{
    protected $signature = 'notifications:cleanup';
    protected $description = 'Delete notifications older than 30 days';

    public function handle()
    {
        DB::table('notifications')
            ->where('created_at', '<', Carbon::now()->subDays(30))
            ->delete();

        $this->info('Old notifications deleted');
    }
}
