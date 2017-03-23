<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accueil extends Model
{
    protected $fillable = [
 		'user_id','content','titre','auteur'
 	];


 	public function getShortContentAttribute()
 	{
 		return substr($this->content,0,random_int(20,30)) . '...';
 	}
}
