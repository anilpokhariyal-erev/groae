<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
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
        // Custom Validator
        Validator::extend('matches_confirmation', function ($attribute, $value, $parameters, $validator) {
            return $value == $validator->getData()[$parameters[0]];
        });

        // Fetch parent pages (where parent_id is null) and their child pages for footer
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
    }
}
