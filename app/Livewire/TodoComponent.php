<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoComponent extends Component
{
    public $todos;
    public $statusFilter = 'all';
    public $sortBy = '';

    public function mount()
    {
        $this->loadTodos();
    }

    public function render()
    {
        return view('livewire.TodoComponent', [
            'todos' => $this->todos,
        ]);
    }

    public function sortByTitle()
    {
        // Set the current sort order
        $this->sortBy = 'title';
        $this->applyFiltersAndSort();
    }

    public function sortByTimeAsc()
    {
        // Set the current sort order
        $this->sortBy = 'asc';
        $this->applyFiltersAndSort();
    }

    public function sortByTimeDesc()
    {
        // Set the current sort order
        $this->sortBy = 'desc';
        $this->applyFiltersAndSort();
    }

    public function filterByStatus($status)
    {
        $this->statusFilter = $status;
        $this->applyFiltersAndSort();
    }

    private function applyFiltersAndSort()
    {
        $query = Todo::where('user_id', Auth::id());

        // Apply filter by status
        if ($this->statusFilter !== 'all') {
            $query->where('status', $this->statusFilter);
        }

        // Apply sorting based on current sort order
        if ($this->sortBy === 'title') {
            $query->orderBy('title');
        } elseif ($this->sortBy === 'asc') {
            $query->orderBy('created_at', 'asc');
        } elseif ($this->sortBy === 'desc') {
            $query->orderBy('created_at', 'desc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        // Fetch todos
        $this->todos = $query->get();
    }

    private function loadTodos()
    {
        $this->todos = Todo::where('user_id', Auth::id())
            ->get();
    }
}
