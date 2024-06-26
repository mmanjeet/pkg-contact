<?php

namespace Trick\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function register()
    {
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }
}
