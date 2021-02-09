<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UpdateStatus extends Model
{
    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }

    protected $guarded = [];
}
