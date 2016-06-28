<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Addon;

class ComposerServiceProvider extends ServiceProvider{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(){
        view()->composer('partials.forms.addons', function($view){
            $view->with('addons', Addon::all());
        });

        view()->composer(['robes.create', 'robes.edit', 'robes.filters', 'robes.list', 'locations.filters', 'locations.create'], function($view){
            $color_options = ['Blanche', 'Noire', 'Rose','Semon','Aubergine', 'Dorée', 'Rouge Bordeau', 'Jaune', 'Ecru', 'Rouge', 'Verte', 'Verte doux', 'Bleue', 'Bleue marine'];
            $view->with('color_options', $color_options);
        });

        view()->composer(['robes.categories', 'robes.index', 'robes.create', 'robes.edit'], function($view){            
            $categories = ['0' => 'Mariée', '1' => 'Fiancaille', '2' => 'Keswa', '3' => 'Hadhara'];
            $view->with('categories', $categories);
        });

        view()->composer(['locations.create', 'locations.edit', 'locations.filters'], 'App\Http\ViewComposers\LocationComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
