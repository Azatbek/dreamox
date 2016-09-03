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
            $product = \App\Products::where('published','=',1)->where('on_home','=',1)->first();
						$thumbnails = \App\Thumbnails::where('product_id','=',$product->id)->get();
            $view->with(compact('product'))->with(compact('thumbnails'));
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
