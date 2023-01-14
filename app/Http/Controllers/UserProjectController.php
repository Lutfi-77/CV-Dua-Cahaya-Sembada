<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class UserProjectController extends Controller
{
    
    public function index()
    {
        $projects = Project::all();
        return view('project', compact('projects'));
    }

}
