<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ScheduleController extends Controller
{
  public function index()
  {

    return Inertia::render('Schedule/Index');
  }
}
