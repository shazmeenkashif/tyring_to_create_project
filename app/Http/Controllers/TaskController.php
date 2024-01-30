<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyTask;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return response()->json([
            'status'=> 'Success',
            'message'=>'All tasks',
            'data'=> DailyTask::all()
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=Auth::user();
        $request->validate([
            'task_name' => 'required',
            'task_text' => 'required',
            

        ]);
       $task= DailyTask::create([
            'task_name' => $request->task_name,
            'task_text' => $request->task_text,
            'user_id'=>$user->id,
        ]);
        return response()->json([
            'status'=> 'success',
            'message'=> 'data added sucessfully',
            'data'=>$task,
        ]);







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
        $user = Auth::user();

        // Find the task
        $task = DailyTask::findOrFail($id);

        // Check if the task belongs to the authenticated user
        if ($task->user_id !== $user->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Validation
        $request->validate([
            'task_name' => 'required',
            'task_text' => 'required',
           
        ]);

        // Update the task
        $task->update([
            
            'task_name' => $request->task_name,
            'task_text' => $request->task_text,
            'user_id'=>$user->id,
        ]);

        // Return response
        return response()->json(['task' => $task], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
