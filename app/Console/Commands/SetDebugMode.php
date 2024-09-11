<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;


class SetDebugMode extends Command
{
    protected $signature = 'set:debug-mode';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'Set APP_DEBUG variable in the .env file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $envFile = base_path('.env');
        $currentEnv = File::get($envFile);

        // Set APP_DEBUG to false
        $newEnv = str_replace('APP_DEBUG=true', 'APP_DEBUG=false', $currentEnv);

        // Write the new environment to the .env file
        File::put($envFile, $newEnv);

        $this->info('APP_DEBUG set to false.');
    }
}
