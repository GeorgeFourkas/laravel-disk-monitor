<?php

namespace Laraveldiskmonitor\LaravelDiskMonitor;

use Laraveldiskmonitor\LaravelDiskMonitor\Commands\RecordDiskMetrics;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {

        $package
            ->name('laravel-disk-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_disk_monitor_table')
            ->hasCommand(RecordDiskMetrics::class);
    }
}
