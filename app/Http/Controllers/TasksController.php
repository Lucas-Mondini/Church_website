<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Task;



class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();



        return view('List_Task', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register_task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            "name" => "required",
            "TODO" => "required",
            "is_finished" => "required",
            "date_launch" => "required"
        ]);

        $Task = new Task();
        $Task->name = $request->name;
        $Task->TODO = $request->TODO;
        $Task->is_finished = $request->is_finished;
        $Task->date_launch = $request->date_launch;

        $Task->save();

        return redirect("/task/$Task->id");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $task = Task::find($id);

        if (! $task)
            abort(404);

        return view('Task', [
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $task = Task::find($id);

        if (! $task)
            abort(404);


            return view('Edit_task', [
                'task' => $task
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Task = Task::find($id);

        if (! $Task)
            abort(404);

            $this->validate($request, [
                "name" => "required",
                "TODO" => "required",
                "is_finished" => "required",
                "date_launch" => "required"
            ]);

            $Task->name = $request->name;
            $Task->TODO = $request->TODO;
            $Task->is_finished = $request->is_finished;
            $Task->date_launch = $request->date_launch;

            $Task->save();

        return redirect("/task/$Task->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
