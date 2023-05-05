<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserTasksRequest;
use App\Http\Resources\UserTaskResource;
use App\Models\UserTask;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;

class UserTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserTaskResource::collection(
            UserTask::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserTasksRequest $request)
    {
        $request->validated();

        $task = UserTask::create([
            'name' => $request->name,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status_id' => $request->status_id
        ]);

        return new TasksResource($task);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
