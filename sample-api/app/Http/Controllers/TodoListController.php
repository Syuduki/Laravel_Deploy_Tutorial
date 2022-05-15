<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Usecase\Todo\TodoListUsecase;

class TodoListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TodoListUsecase $usecase)
    {
        try {
            return response()->json($usecase());
        } catch (\Exception $e) {
            return response()->json(["data" => [], "messages" => $e->getMessage()], 400);
        }
    }
}