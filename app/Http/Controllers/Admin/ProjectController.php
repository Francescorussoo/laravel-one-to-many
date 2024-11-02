<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('backoffice.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('backoffice.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|string',
            'url' => 'nullable|url'
        ]);

        Project::create($data);
        return redirect()->route('backoffice.projects.index');
    }

    public function edit(Project $project)
    {
        return view('backoffice.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|string',
            'url' => 'nullable|url'
        ]);

        $project->update($data);
        return redirect()->route('backoffice.projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('backoffice.projects.index');
    }
}
