<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskUpdateController extends Controller
{
    public function __invoke(UpdateTaskRequest $request, $id): JsonResponse
    {
       $task = Task::find($id);

       if(!$task){
            return response()->json([
                'message' => 'not found'
            ], 404);
       }

       $task->update($request->validated());
       
       return response()->json([
            'data'      => $task,
            'message'   => 'task updated'
       ]);
    }
}
