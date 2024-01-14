<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyTask;

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
        $request->validate([
            'task_name' => 'required',
            'task_text' => 'required',
            'user_id'=> 'required',

        ]);
        DailyTask::create([
            'task_name' => $request->task_name,
            'task_text' => $request->task_text,
            'user_id'=>$request->user_id
        ]);
        return response()->json([
            'status'=> 'success',
            'message'=> 'data added sucessfully',
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
