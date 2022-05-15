<?php

namespace App\Http\Usecase\Todo;

use App\Models\Todo;

class TodoDeleteUsecase {
  public function __invoke($id)
  {
    Todo::where('id',$id)->Delete();
  }
}