<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskDestroyController extends Controller
{
    public function __invoke(Task $task): JsonResponse
    {
        $task->delete();

        return response()->json([
            'message' => 'task deleted'
        ], 204);
    }
}
