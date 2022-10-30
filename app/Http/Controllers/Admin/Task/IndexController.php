<?php

namespace App\Http\Controllers\Admin\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SortingRequest;
use App\Models\Task;

class IndexController extends Controller
{
    public function show(SortingRequest $request){
        $task = new Task;
        $data = $request->validated();
        //dd($task->all());
        $limit = 3;
        $orderBy = 'id';
        $direction = 'asc';

        isset($data['orderby']) && $orderBy = $data['orderby'];
        isset($data['direction']) && $direction = $data['direction'];

        return view('admin.task.index', ['data' => $task->orderBy($orderBy, $direction)->paginate(3)]);
    }
}
