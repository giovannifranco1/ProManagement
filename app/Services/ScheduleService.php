<?php

namespace App\Services;

use App\Repositories\Interfaces\ScheduleRepositoryInterface;
use App\Services\Interfaces\ScheduleServiceInterface;

class ScheduleService implements ScheduleServiceInterface
{
  public $scheduleRepository;

  public function __construct(ScheduleRepositoryInterface $scheduleRepository)
  {
    $this->scheduleRepository = $scheduleRepository;
  }

  public function saveScheduleData()
  {

  }
}
