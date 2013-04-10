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
     * Events that should occur on boot
     *
     * @return void
     */
    public function boot()
    {
     //
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
	 * List of services provided
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('hellodolly');
	}

}