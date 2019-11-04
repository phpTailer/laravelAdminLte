<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    public function getRoutesAttribute($value)
    {
        return explode(',',$value);
    }
}
