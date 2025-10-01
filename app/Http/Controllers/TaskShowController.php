<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskShowController extends Controller
{
    public function __invoke($id): JsonResponse
    {
        $task = Task::find($id);

        if(!$task){
            return response()->json([
                'message' => 'not found'
            ], 404);
        }

        return response()->json([
            'data'      => $task,
            'message'   => 'success'
        ]);
    }
}
