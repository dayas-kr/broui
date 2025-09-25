<?php

namespace DayasKr\Broui;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BrouiServiceProvider extends ServiceProvider
{
  public function boot(): void
  {
    // Load package views under "ui::"
    $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');

    // Register Blade components in the namespace
    Blade::componentNamespace('DayasKr\\Broui\\View\\Components', 'ui');

    // Allow publishing views
    $this->publishes([
      __DIR__ . '/../resources/views' => resource_path('views/vendor/ui'),
    ], 'broui-views');
  }

  public function register(): void
  {
    //
  }
}
