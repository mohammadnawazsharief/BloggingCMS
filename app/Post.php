<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//below is done for softdeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	//below is done for softdeletes
	
	use SoftDeletes;

	protected $fillable = ['title','content','category_id','featured','slug'];
	//below is done for softdeletes
 	 protected $dates = ['deleted_at'];

 	 //below is done for accessors-- convention is compulsory
 	 public function getFeaturedAttribute($featured)
 	 {
 	 	return asset($featured); 
 	 	//asset method is used to generate link for that application and we catch it in index.blade.php
 	 }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}
