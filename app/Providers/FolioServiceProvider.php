<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;

class FolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Folio::path(resource_path('views/pages/guest'))->uri('/');

        Folio::path(resource_path('views/pages/admin'))
        ->uri('/ng-admin')
        ->middleware([
            '*' => [
                'auth',
                // 'verified',

                // ...
            ],
        ]);

        // Folio::path(resource_path('views/pages'))->middleware([
        //     '*' => [
        //         //
        //     ],
        // ]);
    }
}
