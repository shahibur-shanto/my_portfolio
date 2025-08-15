@extends('layouts.admin')

@section('title', isset($menu) ? 'Edit Menu Item' : 'Add Menu Item')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-6">{{ isset($menu) ? 'Edit' : 'Add' }} Menu Item</h2>

        <form method="POST" action="{{ isset($menu) ? route('admin.menus.update', $menu->id) : route('admin.menus.store') }}">
            @csrf
            @if(isset($menu))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $menu->name ?? '') }}"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    {{ isset($menu) ? 'Update' : 'Save' }}
                </button>
            </div>
        </form>
    </div>
@endsection
