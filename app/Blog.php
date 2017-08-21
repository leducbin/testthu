<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    public function article()
     {
     	return $this->belongsTo('App\Article','id');
     }
}
