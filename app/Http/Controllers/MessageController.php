<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function get(){
        $message = Message::where("slug", request("slug"))->firstOrFail();

        return redirect("/messages/" . $message->slug);
    }

    public function show(Message $message){
        $comments = Comment::where("message_id", $message->id)->get();
        return view("message", ["message" => $message, "comments" => $comments]);
    }

    public function addComment(Message $message){
        Comment::insert(["message_id" => $message->id, "content" => request("content")]);
        return redirect("/messages/" . $message->slug);
    }


}
