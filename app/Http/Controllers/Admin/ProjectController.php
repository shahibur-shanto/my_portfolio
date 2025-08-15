<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('projects.all-projects',['menus'=>$menus]);
//        $projects = Project::latest()->paginate(10);
//        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           'title'=>'required|string|max:255',
            'description'=>'nullable|string',
            'status'=>  'in:active,inactive,under_construction',
            'image'=> 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('projects','public');
        }
        Project::create($validated);
        return redirect()->route('admin.projects.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
         $menus = Menu::all();

        return view('projects.show', [
            'project' => $project,
            'menus'=>$menus,
            'relatedProjects' => Project::where('id', '!=', $project->id)
                ->latest()
                ->take(3)
                ->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.form', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $this->validateRequest($request);

        // Handle image update
        if ($request->hasFile('image')) {
            $this->deleteImage($project->image); // Delete old image
            $validated['image'] = $this->storeImage($request->file('image'));
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $this->deleteImage($project->image); // Delete associated image
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully');
    }

    protected function validateRequest(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'status' => 'required|in:active,inactive,completed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);
    }

    /**
     * Store uploaded image
     */
    protected function storeImage($image): string
    {
        return $image->store('projects', 'public');
    }

    /**
     * Delete image from storage
     */
    protected function deleteImage(?string $imagePath): void
    {
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }
}

