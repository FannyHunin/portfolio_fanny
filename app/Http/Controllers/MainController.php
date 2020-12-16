<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $projectData = Project::simplePaginate(1);
        $aboutData = About::all();
        return view('main', compact('projectData', 'aboutData'));
    }
}
