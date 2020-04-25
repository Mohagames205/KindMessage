<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function addComment(Message $message, string $content)
    {
        $this->message_id = $message->id;
        $this->content = $content;
        $this->save();
    }
}
