<?php

namespace App\Providers;

use App\Models\Schedule;
use App\Repositories\Eloquent\ScheduleRepository;
use App\Repositories\Interfaces\ScheduleRepositoryInterface;
use App\Services\Interfaces\ScheduleServiceInterface;
use App\Services\ScheduleService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class ScheduleServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    App::bind(ScheduleServiceInterface::class, ScheduleService::class);
    App::bind(ScheduleRepositoryInterface::class, ScheduleRepository::class);

    App::when(ScheduleRepository::class)
      ->needs(Schedule::class)
      ->give(function () {
        $route = request()->route();
        if ($route && $route->hasParameter('schedule')) {
          return Schedule::findOrFail($route->parameter('schedule'));
        } else if ($route) {
          return new Schedule();
        }
        throw new ModelNotFoundException('Schedule not found', 404);
      });
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    //
  }
}
