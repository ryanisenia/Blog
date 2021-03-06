<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function addComment($body)
   {
   		
   		$this->comments()->create(compact('body'));
    	/*Comment::create([

    			'body'=>$body,
    			'post_id'=>$this->id
    			]);*/
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
