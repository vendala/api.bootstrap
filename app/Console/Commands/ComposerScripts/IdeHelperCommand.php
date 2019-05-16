<?php

namespace App\Console\Commands\ComposerScripts;

use Illuminate\Console\Command;

use function app;

/**
 * Class IdeHelperCommand.
 *
 * @package App\Console\Commands\ComposerScripts
 */
class IdeHelperCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ide-helper:run';

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
     */
    public static function handle(): void
    {
        if (app()->environment() === 'local') {
            $artisan = app()->make(\Illuminate\Contracts\Console\Kernel::class);

            $artisan->call('ide-helper:models -RWrn');
            $artisan->call('ide-helper:eloquent');
            $artisan->call('ide-helper:generate');
            $artisan->call('ide-helper:meta');
        }
    }
}
