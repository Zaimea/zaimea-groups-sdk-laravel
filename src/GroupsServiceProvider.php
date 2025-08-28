<?php namespace Zaimea\GroupsSDK;

use Zaimea\GroupsSDKPHP;
use Illuminate\Support\ServiceProvider;

/**
 * Zaimea Groups SDK for PHP service provider for Laravel applications
 */
class GroupsServiceProvider extends ServiceProvider
{
    const VERSION = '1.0';

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the configuration
     *
     * @return void
     */
    public function boot()
    {
          $this->publishes(
              [__DIR__.'/../config/groups.php' => config_path('groups.php')],
              'groups'
          );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/groups.php',
            'groups'
        );

        $this->app->singleton('groups', function ($app) {
            $config = $app->make('config')->get('groups');

            return new GroupsSDKPHP($config);
        });

        $this->app->alias('groups', 'Zaimea\GroupsSDKPHP');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['groups', 'Zaimea\GroupsSDKPHP'];
    }

}
