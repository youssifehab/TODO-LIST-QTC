@extends('layouts.master')
@section('title', 'Edit Todo')

@section('content')
    @if ($errors->any())
        <div class="text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <x-input-label for="title" :value="__('Task Title')" />
            <x-text-input wire:model="form.title" id="title" class="block mt-1 w-full" type="text" name="title" required
                autofocus value="{{ $todo->title }}" />
        </div>
        <br>
        <div>
            <x-input-label for="description" :value="__('Task Description')" />
            <x-text-input wire:model="form.description" id="description" class="block mt-1 w-full" type="text"
                name="description" required autofocus value="{{ $todo->description }}" />
        </div>
        <br>
        <div>
            <x-input-label for="status" :value="__('Task Status')" />
            <p class="text-gray-400">if check box is checked then task is completed and if it is not checked then task is
                pending</p>
            <input type="checkbox" name="status" id="status" {{ $todo->status == 1 ? 'checked' : '' }}>
        </div>
        <br>
        <div class="flex items-center justify-center">
            <x-primary-button>
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
@endsection
