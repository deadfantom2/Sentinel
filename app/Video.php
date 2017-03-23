<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'categorie_id','user_id','role_id','titre','details' ,'content'
 	];

 	public function getShortContentAttribute()
 	{
 		return substr($this->content,0,random_int(20,30)) . '...';
 	}
}
