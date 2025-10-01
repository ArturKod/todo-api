<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskUpdateController extends Controller
{
    public function __invoke(UpdateTaskRequest $request, Task $task): JsonResponse
    {
       $task->update($request->validated());
       
       return response()->json([
            'data'      => $task,
            'message'   => 'task updated'
       ]);
    }
}
