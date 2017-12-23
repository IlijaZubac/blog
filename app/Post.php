<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];
   public static function getPublishedPosts()
   {
       return self::where('is_published', true)->get();
   }
}
