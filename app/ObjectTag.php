<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectTag extends Model 
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag_id','object_id',
    ];

    

}
