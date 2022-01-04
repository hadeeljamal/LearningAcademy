<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $guarded = ['id'];

    public function cousrses()
    {
        return $this->hasMany('App\Course');
    }

}
