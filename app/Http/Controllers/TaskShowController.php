<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskShowController extends Controller
{
    public function __invoke(Task $task)
    {
        return response()->json([
            'data'      => $task,
            'message'   => 'success'
        ]);
    }
}
