<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    //
    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);

        $title = $request->title;
        $description = $request->description;


        if (Auth::check()) {
            $userId = Auth::id();

            Todo::create([
                'title' => $title,
                'description' => $description,
                'user_id' => $userId
            ]);

            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Authentication required.');
        }

        return to_route('dashboard');
    }

    function edit(Todo $todo)
    {
        return view('todos.edit', ['todo' => $todo]);
    }

    function update(Request $request, $todoId)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);

        $title = $request->title;
        $description = $request->description;
        $status = $request->status;
        if ($status == 'on') {
            $status = 1;
        } else {
            $status = 0;
        }

        $singleTodo = Todo::find($todoId);

        $singleTodo->update([
            'title' => $title,
            'description' => $description,
            'status' => $status,
        ]);

        return to_route('dashboard');
    }

    function destroy($todoId)
    {
        if (Auth::check()) {
            $singleTodo = Todo::where('id', $todoId)
                ->where('user_id', auth()->user()->id)
                ->first();
            if ($singleTodo) {
                $singleTodo->delete();
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('dashboard')->withe('error', 'Authentication required.');
            }
        }
    }
}
