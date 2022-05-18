<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return WorkerResource::collection(
            Worker::all()
        );

    }

    public function show(int $id)
    {
        $worker = Worker::find($id);

        return $worker ? WorkerResource::make($worker) : response()->json(data:null, status: 404);
    }
}
