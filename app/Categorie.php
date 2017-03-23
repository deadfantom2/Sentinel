<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
 		'user_id','role_id','titre','content'
 	];

 	public function getShortContentAttribute()
 	{
 		return substr($this->content,0,random_int(20,30)) . '...';
 	}
}
