<?php

namespace App\Console\Commands;

use App\Jobs\PrintToday as PrintTodayJob;
use Illuminate\Console\Command;

class PrintToday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'print:today';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Print today';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        PrintTodayJob::dispatch();
    }
}
