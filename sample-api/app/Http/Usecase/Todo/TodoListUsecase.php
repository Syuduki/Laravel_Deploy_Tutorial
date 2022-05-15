<?php

namespace App\Http\Usecase\Todo;

use App\Models\Todo;

class TodoListUsecase {
  public function __invoke()
  {
    $query = Todo::query();
    $todoList = $query->select('*')->orderByRaw("id ASC")->get()->toArray();

    return ["data" => $todoList, "mesages" => __("messages.success")];
  }
}