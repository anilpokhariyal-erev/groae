<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use App\Models\StaticPage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // default urls to https
        URL::forceScheme('https');
        // Custom Validator
        Validator::extend('matches_confirmation', function ($attribute, $value, $parameters, $validator) {
            return $value == $validator->getData()[$parameters[0]];
        });
        try {
            $footerParents = StaticPage::whereNull('parent_id')
                ->where('visible_in_footer', true) // Only show pages visible in the footer
                ->with(['children' => function ($query) {
                    $query->where('visible_in_footer', true) // Only show child pages visible in the footer
                    ->orderBy('sort', 'asc'); // Sort child pages by the sort column
                }])
                ->orderBy('sort', 'asc') // Sort parent pages by the sort column
                ->get();

            // Share the footer links data with all views
            view()->share('footerParents', $footerParents);

            $menus = Menu::where('parent_id', null)->with('children')->get();
            view()->share('menus', $menus);
        }catch (\Exception $exception){
            print('error in provider');
        }
        // Fetch parent pages (where parent_id is null) and their child pages for footer
    }
}
