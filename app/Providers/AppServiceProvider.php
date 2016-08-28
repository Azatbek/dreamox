<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Factory;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(Factory $view)
	{
		$view->composer('front.part.home', function ($view) {
            $products = \App\Products::where('published','=',1)->paginate(6);
            $view->with(compact('products'));
        });
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
