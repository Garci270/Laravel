<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->paginate(10)
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{task}', function(Task $task) {
    return view('show', ['task' => $task]);
})->name('tasks.show');

Route::get('/tasks/{task}/edit', function(Task $task) {
    return view('edit', ['task' => $task]);
})->name('tasks.edit');

Route::get('/', function(){
    return redirect()->route('tasks.index');
});

Route::post('/tasks', function (TaskRequest $request){
    $data = $request->validated();
    $task = Task::create($data);

    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task created succesfully!');
})->name('tasks.store');

Route::put('/tasks/{task}', function (Task $task, TaskRequest $request){
    $data = $request->validated();
    $task->update($data);
    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task updated succesfully!');
})->name('tasks.update');


Route::delete('task/{task}', function (Task $task){
    $task->delete();
    return redirect()->route('tasks.index')->with('success', 'Task deleted succesfully');
})->name('tasks.destroy');

Route::put('tasks/{task}/toogle-complete', function(Task $task){
    $task->toogleComplete();

    return redirect()->back()->with('success', 'Task updated succesfully!');

})->name('tasks.toggle-complete');