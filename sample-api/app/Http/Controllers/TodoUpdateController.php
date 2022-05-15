<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Usecase\Todo\TodoUpdateUsecase;
use Illuminate\Support\Facades\DB;

class TodoUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TodoUpdateUsecase $usecase)
    {
        try {
            DB::beginTransaction();
            $usecase($request->id, $request->title, $request->contents, $request->deadLine, $request->complate);
            DB::commit();
            return response()->json(["data" => [], "mesages" => __("messages.success")]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(["data" => [], "messages" => $e->getMessage()], 400);
        }
    }
}