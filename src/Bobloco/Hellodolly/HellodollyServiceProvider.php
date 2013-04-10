<?php namespace Bobloco\Hellodolly;

use Illuminate\Support\ServiceProvider;

class HellodollyServiceProvider extends ServiceProvider {

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
     //   $this->package('bobloco/hellodolly');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['hellodolly'] = $this->app->share(function($app)
        {
            return new Hellodolly;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('hellodolly');
	}

}