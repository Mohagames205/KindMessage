<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = ["slug", "message", "name"];

    public function getRouteKeyName()
    {
        return "slug";
    }
}
