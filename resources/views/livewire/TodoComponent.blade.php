<div>
    {{-- create-task-button --}}
    <div class="flex">
        <x-primary-button route="todos.create">
            {{ __('Create New Task') }}
        </x-primary-button>
    </div>
    <br>
    <hr>
    <br>
    {{-- sorting & filteration --}}
    <div class="flex items-center justify-between">
        <x-secondary-button wire:click="sortByTitle">
            {{ __('sort by title') }}
            </x-primary-button>
            <x-secondary-button wire:click="sortByTimeAsc">
                {{ __('sort by time ascending') }}
                </x-primary-button>
                <x-secondary-button wire:click="sortByTimeDesc">
                    {{ __('sort by time descending') }}
                    </x-primary-button>
    </div>
    <br>
    <hr>
    <br>

    {{-- filteration --}}

    <div class="flex items-center justify-between">
        <x-secondary-button wire:click="filterByStatus('all')">
            {{ __('All') }}
        </x-secondary-button>
        <x-secondary-button wire:click="filterByStatus(1)">
            {{ __('Status Completed') }}
        </x-secondary-button>
        <x-secondary-button wire:click="filterByStatus(0)">
            {{ __('Status Pending') }}
        </x-secondary-button>
    </div>

    <br>

    {{-- Table & handling Errors --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        @if ($errors->any())
            <div class="text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Table -->
        <div class=" shadow-md rounded my-6 text-center">
            <table class="table" style="width:100%">
                <thead class="bg-gray-200 text-red-600">
                    <tr>
                        <th class="py-2 px-3 text-left">Title</th>
                        <th class="py-2 px-3 text-left">Description</th>
                        <th class="py-2 px-3 text-left">Status</th>
                        <th class="py-2 px-3 text-left">Created At</th>
                        <th class="py-2 px-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($todos as $todo)
                        <tr>
                            <td class="py-3 px-3">{{ $todo->title }}</td>
                            <td class="py-3 px-3">{{ $todo->description }}</td>
                            <td class="py-3 px-3">
                                <input type="checkbox" {{ $todo->status == 1 ? 'checked' : '' }} disabled>
                                <span>{{ $todo->status == 1 ? 'completed' : 'pending' }}</span>
                            </td>
                            <td class="py-3 px-3">{{ $todo->created_at }}</td>
                            <td class="py-3 px-3 flex justify-center">
                                <div class="mr-2">
                                    <x-primary-button route='todos.edit' :id="$todo->id">Edit</x-primary-button>
                                </div>
                                <div>
                                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button>Delete</x-danger-button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
