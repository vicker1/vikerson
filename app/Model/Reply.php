<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        return $this->belongsto(question::class);
    }

    public function user()
    {
        return $this->belongsto(user::class);
    }

    public function like()
    {
        return $this->hasmany(like::class);
    }

}
