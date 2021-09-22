<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
  protected $model;

  public function __construct()
  {
    $this->model = $this->resolveModel();
  }

  protected function resolveModel()
  {
    return app($this->model::class);
  }
  public function errors()
  {
    //
  }
  public function all(array $related = null)
  {
    //
  }
  public function save(array $data)
  {
    $this->model = $data;
  }
}
