<?php

namespace Laraveldiskmonitor\LaravelDiskMonitor\Commands;

use Illuminate\Console\Command;

class LaravelDiskMonitorCommand extends Command
{
    public $signature = 'laravel-disk-monitor';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
