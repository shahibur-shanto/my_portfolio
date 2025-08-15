


@extends('layouts.admin')

@section('title', isset($project) ? 'Edit Project' : 'Add Project')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-6">{{ isset($project) ? 'Edit' : 'Add' }} Project</h2>

        <form method="POST"
              action="{{ isset($project) ? route('admin.projects.update', $project->id) : route('admin.projects.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if(isset($project))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title*</label>
                <input type="text" name="title" id="title"
                       value="{{ old('title', $project->title ?? '') }}"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('title')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="3"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('description', $project->description ?? '') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status*</label>
                <select name="status" id="status"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="active" @selected(old('status',$project->status ?? '')=='active')>Active</option>
                    <option value="inactive" {{ (old('status', $project->status ?? '') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Project Image</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full">
                @if(isset($project) && $project->image)
                    <div class="mt-2">
                        <img alt="Project Images" src="{{ asset('storage/' . $project->image) }}" class="h-20"/>
                    </div>
                @endif
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    {{ isset($project) ? 'Update' : 'Save' }} Project
                </button>
            </div>
        </form>
    </div>
@endsection
