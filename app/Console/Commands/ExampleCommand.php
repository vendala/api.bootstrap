<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * Class IdeHelperCommand.
 *
 * @package App\Console\Commands\ComposerScripts
 */
class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vendor:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The console command description.';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {

    }
}
