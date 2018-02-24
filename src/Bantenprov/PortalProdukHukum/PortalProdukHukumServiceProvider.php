<?php namespace Bantenprov\PortalProdukHukum;

use Illuminate\Support\ServiceProvider;
use Bantenprov\PortalProdukHukum\Console\Commands\PortalProdukHukumCommand;

/**
 * The PortalProdukHukumServiceProvider class
 *
 * @package Bantenprov\PortalProdukHukum
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PortalProdukHukumServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('portal-produk-hukum', function ($app) {
            return new PortalProdukHukum;
        });

        $this->app->singleton('command.portal-produk-hukum', function ($app) {
            return new PortalProdukHukumCommand;
        });

        $this->commands('command.portal-produk-hukum');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'portal-produk-hukum',
            'command.portal-produk-hukum',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/../../config/config.php';
        $appConfigPath     = config_path('portal-produk-hukum.php');

        $this->mergeConfigFrom($packageConfigPath, 'portal-produk-hukum');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/../../resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'portal-produk-hukum');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/portal-produk-hukum'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/../../resources/views';

        $this->loadViewsFrom($packageViewsPath, 'portal-produk-hukum');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/portal-produk-hukum'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/../../resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/portal-produk-hukum'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/../../database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
