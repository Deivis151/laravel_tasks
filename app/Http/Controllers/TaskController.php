<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Statuse;
use Carbon\Carbon;
use Validator;
use Auth;

class TaskController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $tasks = Task::all();
        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Statuse::all();
        return view('task.create', ['statuses' => $statuses])->with('success_message', 'Sekmingai sukurtas.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->task_name;
        $task->description = $request->task_description;
        $task->complete_date = $request->task_complete_date;
        $task->add_date = Carbon::now()->format('Y-m-d h:m:s');
        $task->update_date = Carbon::now()->format('Y-m-d h:m:s');
        $task->status_id = $request->statuse_id;
        $task->save();
        return redirect()->route('task.index')->with('success_message', 'Užduotis sėkmingai sukurta');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
       
       $statuses = Statuse::all();
       return view('task.edit', ['task' => $task,  'statuses' => $statuses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->name = $request->task_name;
        $task->description = $request->task_description;
        $task->complete_date = $request->task_complete_date;
        $task->add_date = Carbon::now()->format('Y-m-d h:m:s');
        $task->update_date = Carbon::now()->format('Y-m-d h:m:s');
        $task->status_id = $request->statuse_id;
        $task->save();
        return redirect()->route('task.index')->with('success_message', 'Užduotis sėkmingai atnaujinta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('success_message', 'Sekmingai ištrintas.');
    }
}
