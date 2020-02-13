<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function get(){
        $message = Message::where("slug", request("slug"))->firstOrFail();

        return redirect("/messages/" . $message->slug);
    }

    public function show(Message $message){
        return view("message", ["message" => $message]);
    }


}
