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
        $app = app();

        if ($app->environment() === 'local') {
            $artisan = $app->make(\Illuminate\Contracts\Console\Kernel::class);

            echo 'Generate Models' . PHP_EOL;
            $artisan->call('ide-helper:models -RWrn');

            echo 'Generate Eloquent' . PHP_EOL;
            $artisan->call('ide-helper:eloquent');

            echo 'Generate Helper' . PHP_EOL;
            $artisan->call('ide-helper:generate');

            echo 'Generate Meta' . PHP_EOL;
            $artisan->call('ide-helper:meta');
        }
    }
}
