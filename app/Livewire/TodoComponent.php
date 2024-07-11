<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoComponent extends Component
{
    public $todos;

    public function mount()
    {
        $user_id = Auth::id();
        $this->todos = Todo::where('user_id', $user_id)->get();
    }

    public function render()
    {
        return view('livewire.TodoComponent', ['todos' => $this->todos]);
    }
}
