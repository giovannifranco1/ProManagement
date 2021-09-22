<?php

namespace App\Repositories\Eloquent;

use App\Models\Schedule;
use App\Repositories\Interfaces\ScheduleRepositoryInterface;

class ScheduleRepository extends AbstractRepository implements ScheduleRepositoryInterface
{
  protected $model;

  public function __construct(Schedule $schedule)
  {
    $this->model = $schedule;
  }
}
