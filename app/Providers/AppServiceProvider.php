<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\ResponseContract;
use App\Services\Response\ResponseService;
use App\Services\Contracts\PageContract;
use App\Services\Page\PageService;
use App\Services\Contracts\CallbackContract;
use App\Services\Callback\CallbackService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ResponseContract::class, ResponseService::class);
        $this->app->bind(PageContract::class, PageService::class);
        $this->app->bind(CallbackContract::class, CallbackService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
