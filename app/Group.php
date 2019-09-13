<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    public function group() {
        return $this->belongsTo('App\UserGroup')->withDefault();
    }
}
