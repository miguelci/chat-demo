<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Events\MessagePosted;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the messages.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return Message::with('user')->get();
  }

  /**
   * Show the messages.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $user = Auth::user();
      $message = request()->get('message');

      $message = $user->messages()->create([
        'message' => request()->get('message')
      ]);

      // Annouce that a new message has been posted
      //broadcast(new MessagePosted($message, $user))->toOthers();

      return ['status' => 'OK'];
  }
}
