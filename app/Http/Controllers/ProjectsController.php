<?php

namespace App\Http\Controllers;

use App\Project;
use Session;

class ProjectsController extends Controller
{
    public function index() {

      $projects = Project::all();

//      return view('projects.index', compact('project'));

    return view('projects.index', ['projects' => $projects]);


    }

    public function show(Project $project) {

      $teddy = "Teddy";

      Session::put('iets', $project);

      return view('projects.show', ['project' => $project, 'teddy' => $teddy]);

    }

    public function create() {

      return view('projects.create');

    }

    public function store() {

      request()->validate([
        'title' => ['required', 'min:3'],
        'description' => ['required', 'min:3']
      ]);

      $iets = Project::create(request(['title', 'description']));
      Session::put('iets', $iets);
      

      return redirect('/projects');

    }

    public function edit(Project $project) {


    //  dd($project->title);

      return view('projects.edit', compact('project'));

    }

    public function update(Project $project) {
      $project->update(request(['title', 'description']));

      return redirect('/projects');
    }

    public function destroy(Project $project) {

    //  dd('hedllo '.$id);
      $project->delete();

      return redirect('/projects');

    }

}
