<?php

namespace App\Http\Controllers;

use App\Http\Requests\SortingRequest;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function process(TaskRequest $req){

        $task = new Task;
        $task->name = $req->input('name');
        $task->email = $req->input('email');
        $task->message = $req->input('message');
        $task->name = $req->input('name');
        $task->done = 0;

        $task->save();

        return redirect()->route('home')->with('success', 'Задача успешно добавлена');
    }

    public function show(SortingRequest $request){
        $task = new Task;
        $data = $request->validated();
        //dd($data);
        $limit = 3;
        $orderBy = 'id';
        $direction = 'asc';

        isset($data['orderby']) && $orderBy = $data['orderby'];
        isset($data['direction']) && $direction = $data['direction'];

        return view('home',['data' => $task->orderBy($orderBy, $direction)->paginate(3)]);
    }
}
