<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearAllCaches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all caches in the application ';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Clearing all caches...');

        // Clear application cache
        $this->call('cache:clear');
        $this->info('Application cache cleared!');

        // Clear view cache
        $this->call('view:clear');
        $this->info('Compiled views cleared!');

        // Clear route cache
        $this->call('route:clear');
        $this->info('Route cache cleared!');

        // Clear configuration cache
        $this->call('config:clear');
        $this->info('Configuration cache cleared!');

        // Clear compiled classes
        $this->call('clear-compiled');
        $this->info('Compiled classes cleared!');

        // Clear event cache
        $this->call('event:clear');
        $this->info('Event cache cleared!');

        // Clear package discovery cache
        $this->call('package:discover');
        $this->info('Package discovery cache cleared!');

        $this->info('All caches cleared successfully!');

        return 0;
    }
}
