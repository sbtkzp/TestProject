<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ["id"];
    protected $fillable = ["user_id", "title", "body", "status"];
}
