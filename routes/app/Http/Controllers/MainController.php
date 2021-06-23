<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $projectData = Project::simplePaginate(1)->fragment('projects');
        $aboutData = About::all();
        $serviceData = Service::all();
        // dd($serviceData);
        return view('main', compact('projectData', 'aboutData', 'serviceData'));
    }
}
