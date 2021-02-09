<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function UpdateStatus()
    {
        return $this->hasMany('App\Models\UpdateStatus');
    }

    
}
