<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','picture','description','comment_id'];


    public function Comment()
	{
		return $this->HasMany('App\Models\Comment');
	} 
}
