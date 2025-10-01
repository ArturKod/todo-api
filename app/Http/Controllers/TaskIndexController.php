<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskIndexController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $tasks = Task::latest()->get();

        return response()->json([
            'data'      => $tasks,
            'message'   => 'success'
        ]);
    }
}
