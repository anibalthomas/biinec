<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;
use App\Notifications\MessageSent;

class MessagesController extends Controller
{



  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $users = User::where('id', '!=', auth()->id()) ->get();
      return view('notifications.mensajes',compact('users'));
 }

 public function store(Request $request)
 {
  //  return $request->all();
  $this->validate($request, [
    'body' => 'required',
    'recipient_id' => 'required|exists:users,id'
  ]);

    $message =  Message::create([
     'sender_id' => auth()->id(),
     'recipient_id' => $request->recipient_id,
     'body' => $request->body,
   ]);

          $recipient = User::find($request->recipient_id);

          $recipient->notify(new MessageSent($message));

           return back()->with('success','Tu mensaje fue enviado');
 }

  public function show($id)
  {
      $message = Message::findOrFail($id);

      return view('notifications.show', compact('message'));
  }






}
