<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroups extends Model
{
    public function users() {
        return $this->hasMany('App\User');
    }

    public function groups() {
        return $this->hasMany('App\Group');
    }
}
