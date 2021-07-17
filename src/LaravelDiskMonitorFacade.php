<?php

namespace Laraveldiskmonitor\LaravelDiskMonitor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laraveldiskmonitor\LaravelDiskMonitor\LaravelDiskMonitor
 */
class LaravelDiskMonitorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-disk-monitor';
    }
}
