<?php 

namespace App\Http\Controllers;

use App\Mail\AlertSender;
use App\Mail\MailSender;
use App\Mail\MessageSender;
use App\Models\Mailing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailingController extends Controller 
{


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
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
    $newEntry = new Mailing;
    $newEntry->sender_mail = $request->sender_mail;
    Mail::to($newEntry->sender_mail)->send(new MailSender($request));
    $newEntry->save();
    return redirect()->back();
  }

  // public function alert(Request $request)
  // {
  //   $newEntry = Mailing::all();
  //   foreach ($newEntry as $item) {
  //     Mail::to($item->sender_mail)->send(new AlertSender($request));
  //   }
  //   return redirect()->back();
  // }

  public function message(Request $request)
   {
     $newEntry = User::all();
     foreach ($newEntry as $item) {
       Mail::to($item->email)->send(new MessageSender($request));

     }
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
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}
