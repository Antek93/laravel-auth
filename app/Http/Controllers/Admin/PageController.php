<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models
use App\Models\Project;
class PageController extends Controller
{
    public function dashboard()
    {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }
}
