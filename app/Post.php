<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    publci function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
