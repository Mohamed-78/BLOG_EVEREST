<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title','picture','description'];


    public function Comments()
	{
		return $this->HasMany('App\Models\Comment');
	} 
}
