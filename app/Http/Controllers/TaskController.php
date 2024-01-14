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
        //
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
        if($request=null){
            return response()->json(["message"=> "no data found","code"=> 400]);
        }
        else{
            return response()->json(["message"=> "hitting the api","code"=> ]);
        }
        
       
        // $task = new DailyTask;
        // $task->task_name= $request->name;
        // $task->task_text=$request->text; 
        // $task->save();
        // if($task!=null){
        //     return response()->json(["message"=>'data added'],200);
        // }
        // else{
        //     return response()->json(['message'=> 'error'],401);
        // }
    

        

        
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
