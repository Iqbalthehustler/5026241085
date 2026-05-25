<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
{
Paginator::useBootstrapFive(); // For Bootstrap 5
// Paginator::useBootstrapFour(); // For Bootstrap 4 (if needed)
}


}
