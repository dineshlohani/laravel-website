<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MakeModelControllerMigration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:full-setup {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a model, migration, and controller with one command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        // Create Model with Migration
        Artisan::call("make:model {$name} -m");

        // Create Controller
        Artisan::call("make:controller {$name}Controller");

        // Notify the user
        $this->info("Model, Migration, and Controller for {$name} created successfully!");

        return 0;
    }
}
