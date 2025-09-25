<?php

namespace DayasKr\Broui;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BrouiServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->mergeConfigFrom(__DIR__ . '/../config/broui.php', 'broui');
  }

  public function boot()
  {
    // Load package views under the "ui" view namespace
    $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');

    // Register component namespace so <x-ui::button> resolves to classes in View\Components
    Blade::componentNamespace('DayasKr\\Broui\\View\\Components', 'ui');

    // Publish config
    $this->publishes([
      __DIR__ . '/../config/broui.php' => config_path('broui.php'),
    ], 'broui-config');

    // Publish views
    $this->publishes([
      __DIR__ . '/../resources/views' => resource_path('views/vendor/ui'),
    ], 'broui-views');

    // Publish JS assets (raw source)
    $this->publishes([
      __DIR__ . '/../resources/js' => public_path('vendor/broui/js'),
    ], 'broui-assets');

    // A convenience tag to publish everything
    $this->publishes([
      __DIR__ . '/../config/broui.php' => config_path('broui.php'),
      __DIR__ . '/../resources/views' => resource_path('views/vendor/ui'),
      __DIR__ . '/../resources/js' => public_path('vendor/broui/js'),
    ], 'broui');
  }
}
