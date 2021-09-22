<?php

namespace App\Http\Controllers;

use App\Repositories\ScheduleRepositoy;
use App\Services\Interfaces\ScheduleServiceInterface;
use Inertia\Inertia;

class ScheduleController extends Controller
{
  private $scheduleService;

  public function __construct(ScheduleServiceInterface $scheduleService)
  {
    $this->scheduleService = $scheduleService;
  }

  public function index()
  {
    //
  }

  public function create()
  {
    $this->scheduleService->createData();
    return Inertia::render('Schedule/create');
  }

  public function show()
  {
    dd($this->scheduleRepositoy);
  }
}
