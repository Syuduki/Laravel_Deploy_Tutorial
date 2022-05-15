<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Usecase\Todo\TodoUsecase;

class TodoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TodoUsecase $usecase)
    {
        try {
            return response()->json($usecase($request->id));
        } catch (\Exception $e) {
            return response()->json(["data" => [], "messages" => $e->getMessage()], 400);
        }
    }
}