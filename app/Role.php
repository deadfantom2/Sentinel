<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'name',
    ];

    public function getShortContentAttribute()
    {
        return substr($this->name,0,random_int(20,30)) . '...';
    }

}
