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

    public function addMessage(){

        request()->validate(
            [
                "slug" => "required|unique:messages",
                "name" => "required",
                "message" => "required"
            ]
        );

        $message = new Message(request(["slug","name", "message"]));
        $message->save();
        return redirect("/messages/" . request("slug"));
    }

    public function addComment(Message $message){
        $comment = new Comment();
        $comment->addComment($message, request("content"));
        return redirect("/messages/" . $message->slug);
    }

    public function delete($id)
    {
            Message::where("id", $id)->delete();
            return redirect("/admin");


    }




}
