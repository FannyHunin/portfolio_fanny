<?php 

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $serviceData = Service::all();
    return view('pages.services', compact('serviceData'));
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
    $newEntry = new Service;
    $newEntry->name = $request->name;
    $newEntry->description = $request->description;
    $newEntry->price = $request->price;
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
    $newEntry = Service::find($id);
    return view('pages.edit_service', compact('newEntry'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
    $newEntry = Service::find($id);
    $newEntry->name = $request->name;
    $newEntry->description = $request->description;
    $newEntry->price = $request->price;
    $newEntry->save();
    return redirect('/services');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $newEntry = Service::find($id);
    $newEntry->delete();
    return redirect()->back();
  }
  
}

?>