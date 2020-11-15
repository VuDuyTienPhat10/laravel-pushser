<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    //xài cái này để bắt buộc mọi tg nào muốn vào đều phải login
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function chat(){
        return view('chat');
    }

    public function send(Request $request){
        //lấy đối tượng user hiện tại
        $user=Auth::user();
        event(new ChatEvent($message,$user));

    }
}
