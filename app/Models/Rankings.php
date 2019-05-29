<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rankings extends Model
{
    public function users(){
        return $this->hasMany('App\Models\Users');
    }
}
