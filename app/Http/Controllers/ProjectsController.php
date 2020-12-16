<?php 

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $tagData = Tag::all();
    $projectData = Project::all();
    return view('pages.projects', compact('tagData', 'projectData'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $validateForm = $request->validate([
      "name" => "required|min:1|max:30",
      "description" => "required",
      "link" => "required",
      "src1" => "required"
    ]);

    $newEntry = new Project;
    $newEntry->name = $request->name;
    $newEntry->description = $request->description;
    $newEntry->link = $request->link;

    $newEntry->src1 = $request->file("src1")->hashName();
    $request->file("src1")->storePublicly("images", "public");

    $newEntry->src2 = $request->file("src2")->hashName();
    $request->file("src2")->storePublicly("images", "public");

    $newEntry->src3 = $request->file("src3")->hashName();
    $request->file("src3")->storePublicly("images", "public");

    $newEntry->tags_id = $request->tags_id;

    $newEntry->save();
    return redirect()->back();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $newEntry = Project::find($id);
    $tagData = Tag::all();
    return view('pages.edit_project', compact('newEntry', 'tagData'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
    $newEntry = Project::find($id);
    $newEntry->name = $request->name;
    $newEntry->description = $request->description;
    $newEntry->link = $request->link;

    Storage::disk('public')->delete('images/'.$newEntry->src1);
    $newEntry->src1 = $request->file("src1")->hashName();
    $request->file("src1")->storePublicly("images", "public");

    Storage::disk('public')->delete('images/'.$newEntry->src2);
    $newEntry->src2 = $request->file("src2")->hashName();
    $request->file("src2")->storePublicly("images", "public");

    Storage::disk('public')->delete('images/'.$newEntry->src3);
    $newEntry->src3 = $request->file("src3")->hashName();
    $request->file("src3")->storePublicly("images", "public");

    $newEntry->tags_id = $request->tags_id;
    
    $newEntry->save(); 

    return redirect('/projects');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $newEntry = Project::find($id);
    $newEntry->delete();
    Storage::disk('public')->delete('images/'.$newEntry->src1);
    Storage::disk('public')->delete('images/'.$newEntry->src2);
    Storage::disk('public')->delete('images/'.$newEntry->src3);
    return redirect()->back();
  }
  
}

?>