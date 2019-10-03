<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //public function getRouteKeyName()

    // {
      //  return 'slug';
    //}

    //protected $fillable = ['title','slug', 'body', 'category_id', 'user_id'];
    //protected $guarded = [];

    public function user()
    {
        return $this->belongsto(user::class);
    }

    public function replies()
    {
        return $this->hasmany(reply::class);
    }

    public function category()
    {
        return $this->belongsto(category::class);
    }
}

