@extends('layouts.master')
@section('title', 'Create New Task')

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
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div>
            <x-input-label for="title" :value="__('Task Title')" />
            <x-text-input wire:model="form.title" id="title" class="block mt-1 w-full" type="text" name="title" required
                autofocus autocomplete="username" />
        </div>
        <br>
        <div>
            <x-input-label for="description" :value="__('Task Description')" />
            <x-text-input wire:model="form.description" id="description" class="block mt-1 w-full" type="text"
                name="description" required autofocus autocomplete="username" />
        </div>
        <br>
        <div class="flex items-center justify-center">
            <x-primary-button>
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
@endsection
