<?php

namespace App\Http\Usecase\Todo;

use App\Models\Todo;

class TodoUpdateUsecase {
  public function __invoke($id, $title, $contents, $deadLine, $complate)
  {
    Todo::where('id',$id)->Update([
      'title' => $title,
      'contents' => $contents,
      'dead_line' => $deadLine,
      'complate' => $complate,
    ]);
  }
}