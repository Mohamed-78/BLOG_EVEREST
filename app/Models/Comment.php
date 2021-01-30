<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name','first_name','content','user_id'];

    public function User()
	{
		return $this->BelongsTo('App\User');
	}

	public function Post()
	{
		return $this->BelongsTo('App\Models\Post');
	}

}
