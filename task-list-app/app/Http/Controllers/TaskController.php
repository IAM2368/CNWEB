<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tasks = Task::findOrFail($id);
        return view('tasks.show', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tasks = Task::findOrFail($id);
        return view('tasks.edit', compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $tasks = Task::findOrFail($id);
        $tasks->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'long_description' => $request->input('long_description'),
            'completed' => $request->has('completed') ? true : false,  // Kiểm tra checkbox
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');

    }
}
