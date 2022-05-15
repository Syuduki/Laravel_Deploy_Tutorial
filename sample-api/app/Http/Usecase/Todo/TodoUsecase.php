<?php

namespace App\Http\Usecase\Todo;

use App\Models\Todo;

class TodoUsecase {
  public function __invoke($id)
  {
    $query = Todo::query();
    $todo = $query->select('*')->find($id);

    return ["data" => $todo, "mesages" => __("messages.success")];
  }
}