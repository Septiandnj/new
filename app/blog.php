<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //
    protected $table = 'blog';
    protected $fillable = ['title','post'];
    protected $visible = ['title','post'];
    public $timestamps = true;

}
