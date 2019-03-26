<?php

namespace App\Providers;

use Laravel\Lumen\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\Console\DetectsApplicationNamespace;

/**
 * Class RepositoryServiceProvider.
 *
 * @package App\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{
    use DetectsApplicationNamespace;

    /**
     * @var \Illuminate\Config\Repository
     */
    private $config;

    /**
     * @var \Illuminate\Filesystem\FilesystemManager
     */
    private $filesystem;

    /**
     * Create a new service provider instance.
     *
     * @param \Laravel\Lumen\Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);

        $this->config = $app->make('config');
        $this->filesystem = $app->make('filesystem');
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $repositories = $this->fileRepositoies();
        $contracts = $this->fileContracts();

        foreach ($repositories as $key => $repository) {
            $this->app->bind($this->getAppNamespace() . $contracts[$key], $this->getAppNamespace() . $repository);
        }
    }

    /**
     * Get all files of repository.
     *
     * @return array
     */
    private function fileRepositoies(): array
    {
        return str_replace('.php', '', str_replace('/', '\\', $this->filesystem->disk('app')->files($this->config->get('repository.generator.paths.repositories'))));
    }

    /**
     * Get all files of contracts of repository.
     *
     * @return array
     */
    private function fileContracts(): array
    {
        return str_replace('.php', '', str_replace('/', '\\', $this->filesystem->disk('app')->files($this->config->get('repository.generator.paths.interfaces'))));
    }
}
